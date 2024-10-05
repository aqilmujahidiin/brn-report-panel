<?php

namespace App\Filament\Pages\Tiktok;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class Affiliate extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';
    protected static ?string $navigationGroup = 'TikTok';
    protected static ?int $navigationSort = 5;
    protected static string $view = 'filament.pages.tiktok.affiliate';
}
