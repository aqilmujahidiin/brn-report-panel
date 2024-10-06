<?php

namespace App\Filament\Pages\Tiktok;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class overview extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'TikTok';
    protected static ?int $navigationSort = 1;
    protected static ?string $slug = 'tiktok/overview';
    protected static string $view = 'filament.pages.tiktok.overview';
}
