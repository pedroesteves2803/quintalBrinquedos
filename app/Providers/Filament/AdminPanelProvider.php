<?php

namespace App\Providers\Filament;

use App\Filament\Resources\HomeResource\Pages\EditHome;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => '#006600',
                'secondary' => '#F3B679',
                'accent' => '#F29130',
            ])

            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
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
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigationGroups(
                $this->getNavigationGroups()
            )
            ->navigationItems(
                $this->getNavigationItems()
            );

    }

    private function getNavigationGroups(): array
    {
        return [
            NavigationGroup::make()
                ->label('Home')
                ->collapsible()
                ->collapsed(),
        ];
    }

    private function getNavigationItems(): array
    {
        return [
            // Home
            NavigationItem::make('Home')
                ->url(fn (): string => EditHome::getUrl(['record' => 1]))
            ->icon('heroicon-o-home')
        ];
    }

    private function makeWildCardForRouteName(string $routeName, ?int $rewindSegments = 1): string
    {
        if (!str_contains($routeName, '.')) {
            return $routeName;
        }

        $segments    = explode('.', $routeName);
        $rootSegment = array_slice($segments, 0, count($segments) - $rewindSegments);

        return implode('.', $rootSegment).'.*';
    }

}
