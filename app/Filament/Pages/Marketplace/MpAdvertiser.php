<?php

namespace App\Filament\Pages\Marketplace;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class MpAdvertiser extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationGroup = 'Marketplace';
    protected static ?string $title = 'Custom Page Title';
    protected static ?string $navigationLabel = 'Advertiser';
    protected static ?int $navigationSort = 2;
    protected static string $view = 'filament.pages.marketplace.mp-overview';
}
