<?php

namespace App\Filament\Pages\Tiktok;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class HostLive extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationGroup = 'TikTok';
    protected static ?int $navigationSort = 4;
    protected static string $view = 'filament.pages.tiktok.host-live';
}
