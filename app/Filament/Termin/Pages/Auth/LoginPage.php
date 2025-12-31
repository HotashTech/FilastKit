<?php

declare(strict_types=1);

namespace App\Filament\Termin\Pages\Auth;

use Filament\Auth\Pages\Login;
use Override;

final class LoginPage extends Login
{
    #[Override]
    public function mount(): void
    {
        parent::mount();

        if (! app()->isProduction()) {
            $this->form->fill([
                'email' => 'termin@hotash.tech',
                'password' => 'password',
            ]);
        }
    }
}
