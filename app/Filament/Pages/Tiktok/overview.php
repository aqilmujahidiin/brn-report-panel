<?php

namespace App\Filament\Pages\Tiktok;

use Filament\Pages\Page;

class overview extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'TikTok';
    protected static ?int $navigationSort = 1;
    protected static string $view = 'filament.pages.tiktok.overview';
}
