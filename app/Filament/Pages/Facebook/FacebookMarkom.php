<?php

namespace App\Filament\Pages\Facebook;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class FacebookMarkom extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Facebook';
    protected static ?int $navigationSort = 13;
    protected static ?string $navigationLabel = 'Markom';
    protected static ?string $title = 'Facebook Markom Report';

    protected static ?string $slug = 'facebook/markom';

    protected static string $view = 'filament.pages.facebook.facebook-markom';
}
