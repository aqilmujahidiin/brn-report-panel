<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Pages\Page;
use Illuminate\Support\Carbon;

class Dashboard extends Page
{
    use HasFiltersForm;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?int $navigationSort = 0;
    protected static ?string $title = 'Dashboard';
    protected static string $view = 'filament.pages.dashboard';

    public $start_date;
    public $end_date;

    public function mount()
    {
        $this->start_date = now()->startOfMonth()->format('Y-m-d');
        $this->end_date = now()->format('Y-m-d');
    }

    public function filtersForm(Form $form): Form
    {
        return $form->schema([
            Section::make('Filter Data')->schema([
                DatePicker::make('start_date')
                    ->label('Tanggal Mulai')
                    ->default($this->start_date)
                    ->maxDate(now())
                    ->closeOnDateSelection(),
                DatePicker::make('end_date')
                    ->label('Tanggal Akhir')
                    ->default($this->end_date)
                    ->minDate(function (callable $get) {
                        return $get('start_date') ?? $this->start_date;
                    })
                    ->maxDate(now())
                    ->closeOnDateSelection(),
            ])
            ->columns(2)
        ]);
    }

    public function filterDashboard()
    {
        $this->start_date = $this->filtersForm->getState()['start_date'];
        $this->end_date = $this->filtersForm->getState()['end_date'];
    }
}