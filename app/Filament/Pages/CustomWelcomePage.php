<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CustomWelcomePage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static string $view = 'filament.pages.custom-welcome';

    protected static ?string $navigationLabel = 'Beranda';
}
