<?php

namespace App\Filament\Pages\Marketplace;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class MpOverview extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'Marketplace';
    protected static ?string $title = 'Overview Report';
    protected static ?string $navigationLabel = 'Overview';
    protected static ?string $slug = 'marketplace/overview';
    protected static ?int $navigationSort = 6;
    protected static string $view = 'filament.pages.marketplace.mp-overview';
}
