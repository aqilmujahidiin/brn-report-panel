<?php

namespace App\Filament\Pages\Tiktok;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class CostControl extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationGroup = 'TikTok';
    protected static ?int $navigationSort = 3;
    protected static string $view = 'filament.pages.tiktok.cost-control';
}
