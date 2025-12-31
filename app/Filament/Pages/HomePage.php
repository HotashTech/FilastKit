<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Page;

final class HomePage extends Page
{
    protected static ?string $slug = '/';

    protected static string $layout = 'filament.layouts.public';

    protected string $view = 'filament.pages.home-page';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-home';
}
