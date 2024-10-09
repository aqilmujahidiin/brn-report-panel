<x-filament-panels::page>
    <div class="mb-4">
        <form wire:submit="filterDashboard">
            {{ $this->filtersForm }}

            <x-filament::button type="submit" class="mt-3">
                Filter
            </x-filament::button>
        </form>
    </div>

    <div class="mb-4 p-2 bg-white rounded shadow">
        <h2 class="text-lg font-semibold">Periode: {{ \Carbon\Carbon::parse($this->start_date)->format('d M Y') }} - {{ \Carbon\Carbon::parse($this->end_date)->format('d M Y') }}</h2>
    </div>

    @livewire(\App\Filament\Widgets\SumOmsetWidget::class, ['start_date' => $this->start_date, 'end_date' => $this->end_date])
    @livewire(\App\Livewire\SalesChart::class, ['start_date' => $this->start_date, 'end_date' => $this->end_date])
</x-filament-panels::page>