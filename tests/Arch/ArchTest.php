<?php

declare(strict_types=1);

use Filament\PanelProvider;
use Pest\Arch\Support\Composer;

const FILAMENT_PROVIDER_NAMESPACE = 'App\Providers\Filament';

arch()->preset()->php();
arch()->preset()->security();

arch()->preset()->laravel()->ignoring(FILAMENT_PROVIDER_NAMESPACE);

arch('Filament providers must have PanelProvider suffix and extend PanelProvider')->expect(FILAMENT_PROVIDER_NAMESPACE)
    ->toHaveSuffix('PanelProvider')
    ->toExtend(PanelProvider::class)
    ->not->toBeUsed();

arch('App classes must not extend Filament\PanelProvider')
    ->expect('App')
    ->not->toExtend(PanelProvider::class)
    ->ignoring(FILAMENT_PROVIDER_NAMESPACE);

arch('App classes must not have PanelProvider suffix')->expect('App')
    ->not->toHaveSuffix('PanelProvider')
    ->ignoring(FILAMENT_PROVIDER_NAMESPACE);

arch('strict', function (): void {
    foreach (Composer::userNamespaces() as $namespace) {
        expect($namespace)->toUseStrictTypes();
        expect($namespace)->toUseStrictEquality();
    }

    expect([
        'sleep',
        'usleep',
    ])->not->toBeUsed();
});
