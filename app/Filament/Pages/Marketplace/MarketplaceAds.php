<?php

namespace App\Filament\Pages\Marketplace;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class MarketplaceAds extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationGroup = 'Marketplace';
    protected static ?string $title = 'Ads Report';
    protected static ?string $navigationLabel = 'Ads';
    protected static ?string $slug = 'marketplace/ads';
    protected static ?int $navigationSort = 8;
    protected static string $view = 'filament.pages.marketplace.marketplace-ads';
}
