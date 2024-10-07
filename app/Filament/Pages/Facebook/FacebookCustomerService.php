<?php

namespace App\Filament\Pages\Facebook;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class FacebookCustomerService extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left-ellipsis';
    protected static ?string $navigationGroup = 'Facebook';
    protected static ?int $navigationSort = 15;
    protected static ?string $navigationLabel = 'Customer Service';
    protected static ?string $title = 'Facebook Customer Service Report';

    protected static ?string $slug = 'facebook/customer-service';

    protected static string $view = 'filament.pages.facebook.facebook-customer-service';
}
