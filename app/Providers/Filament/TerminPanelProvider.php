<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use App\Filament\Termin\Pages\Auth\LoginPage;
use Filament\Auth\MultiFactor\App\AppAuthentication;
use Filament\Auth\MultiFactor\Email\EmailAuthentication;
use Filament\FontProviders\GoogleFontProvider;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

final class TerminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('termin')
            ->path('termin')
            ->domain(domain())
            ->login(LoginPage::class)
            ->passwordReset()
            ->emailVerification()
            ->profile(isSimple: false)
            ->colors([
                'primary' => Color::Blue,
            ])
            ->font('Roboto', provider: GoogleFontProvider::class)
            ->brandLogo(fn (): null => null)
            ->favicon(fn (): null => null)
            ->globalSearch()
            ->globalSearchKeyBindings(['command+k', 'ctrl+k'])
            ->sidebarWidth('16rem')
            ->sidebarCollapsibleOnDesktop()
            ->databaseNotifications()
            ->databaseNotificationsPolling(null)
            ->databaseTransactions()
            ->discoverResources(in: app_path('Filament/Termin/Resources'), for: 'App\Filament\Termin\Resources')
            ->discoverPages(in: app_path('Filament/Termin/Pages'), for: 'App\Filament\Termin\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Termin/Widgets'), for: 'App\Filament\Termin\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authGuard('termin')
            ->authMiddleware([
                Authenticate::class,
            ])
            ->multiFactorAuthentication([
                AppAuthentication::make()
                    ->recoverable(),
                EmailAuthentication::make(),
            ], isRequired: false)
            ->strictAuthorization()
            ->viteTheme('resources/css/filament/termin/theme.css')
            ->unsavedChangesAlerts()
            ->spa(hasPrefetching: true);
    }
}
