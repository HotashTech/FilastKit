<?php

declare(strict_types=1);

use Pest\Arch\Support\Composer;

arch()->preset()->php();
arch()->preset()->security();

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
