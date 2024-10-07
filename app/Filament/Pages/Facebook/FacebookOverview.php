<?php

namespace App\Filament\Pages\Facebook;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class FacebookOverview extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'Facebook';
    protected static ?int $navigationSort = 12;
    protected static ?string $navigationLabel = 'Overview';
    protected static ?string $title = 'Facebook Overview Report';

    protected static ?string $slug = 'facebook/overview';

    protected static string $view = 'filament.pages.facebook.facebook-overview';
}
