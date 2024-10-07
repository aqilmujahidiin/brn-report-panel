<?php

namespace App\Filament\Pages\Facebook;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class FacebookPlacementer extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationGroup = 'Facebook';
    protected static ?int $navigationSort = 14;
    protected static ?string $navigationLabel = 'Placementer';
    protected static ?string $title = 'Facebook Placementer Report';

    protected static ?string $slug = 'facebook/placementer';

    protected static string $view = 'filament.pages.facebook.facebook-placementer';
}
