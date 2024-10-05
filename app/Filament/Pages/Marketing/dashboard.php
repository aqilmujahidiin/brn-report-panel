<?php

namespace App\Filament\Pages\Marketing;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class dashboard extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?int $navigationSort =1;
    protected static string $view = 'filament.pages.marketing.dashboard';
}
