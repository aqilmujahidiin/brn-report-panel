<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Sales;
use Carbon\Carbon;

class SumOmsetWidget extends BaseWidget
{
    public $start_date;
    public $end_date;

    public function mount($start_date = null, $end_date = null)
    {
        $this->start_date = $start_date ?? now()->startOfMonth()->format('Y-m-d');
        $this->end_date = $end_date ?? now()->format('Y-m-d');
    }

    protected function getStats(): array
    {
        $startDate = Carbon::parse($this->start_date);
        $endDate = Carbon::parse($this->end_date);

        $totalOmset = Sales::whereBetween('tanggal', [$startDate, $endDate])->sum('omset');

        $previousPeriodStart = $startDate->copy()->subDays($endDate->diffInDays($startDate) + 1);
        $previousPeriodEnd = $startDate->copy()->subDay();

        $totalOmsetPreviousPeriod = Sales::whereBetween('tanggal', [$previousPeriodStart, $previousPeriodEnd])->sum('omset');
        
        $percentageChange = $totalOmsetPreviousPeriod != 0 
            ? (($totalOmset - $totalOmsetPreviousPeriod) / $totalOmsetPreviousPeriod) * 100 
            : 100;

        return [
            Stat::make('Total Omset', 'Rp ' . number_format($totalOmset, 0, ',', '.'))
                ->description($startDate->format('d M Y') . ' - ' . $endDate->format('d M Y'))
                ->descriptionIcon('heroicon-m-currency-dollar'),
            
            Stat::make('Omset Periode Ini', 'Rp ' . number_format($totalOmset, 0, ',', '.'))
                ->description($startDate->format('d M Y') . ' - ' . $endDate->format('d M Y'))
                ->descriptionIcon('heroicon-m-calendar'),
            
            Stat::make('Perubahan dari Periode Sebelumnya', number_format($percentageChange, 2) . '%')
                ->description('Dibandingkan dengan ' . $previousPeriodStart->format('d M Y') . ' - ' . $previousPeriodEnd->format('d M Y'))
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color($percentageChange > 0 ? 'success' : 'danger'),
        ];
    }
}