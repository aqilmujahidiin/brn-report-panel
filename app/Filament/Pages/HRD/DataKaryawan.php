<?php

namespace App\Filament\Pages\HRD;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Pages\Page;

class DataKaryawan extends Page
{
    use HasPageShield;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    // protected static ?string $navigationParentItem = 'Human Resources';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Data Karyawan';

    protected static ?string $slug = 'hrd/data-karyawan';

    protected static string $view = 'filament.pages.hrd.data-karyawan';
}
