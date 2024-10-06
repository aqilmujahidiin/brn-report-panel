<?php

namespace App\Filament\Pages\Marketing;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?int $navigationSort =1;
    protected static string $view = 'filament.pages.marketing.dashboard';
}
