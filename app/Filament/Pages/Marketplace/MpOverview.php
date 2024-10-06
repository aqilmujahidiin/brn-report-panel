<?php

namespace App\Filament\Pages\Marketplace;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class MpOverview extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'Marketplace';
    protected static ?string $navigationLabel = 'Overview';
    protected static ?int $navigationSort = 1;
    protected static string $view = 'filament.pages.marketplace.mp-overview';
}
