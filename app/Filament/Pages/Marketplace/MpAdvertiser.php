<?php

namespace App\Filament\Pages\Marketplace;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class MpAdvertiser extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationGroup = 'Marketplace';
    protected static ?string $title = 'Advertiser Report';
    protected static ?string $navigationLabel = 'Advertiser';
    protected static ?string $slug = 'marketplace/advertiser';
    protected static ?int $navigationSort = 7;
    protected static string $view = 'filament.pages.marketplace.mp-advertiser';
}
