<?php

namespace App\Filament\Pages\Tiktok;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class advertiser extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationGroup = 'TikTok';
    protected static ?int $navigationSort = 2;
    protected static string $view = 'filament.pages.tiktok.advertiser';
}
