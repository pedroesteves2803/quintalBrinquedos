<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use App\Filament\Resources\AboutUsResource\Pages\EditAboutUs;
use App\Filament\Resources\BudgetResource\Pages\EditBudget;
use App\Filament\Resources\CatalogResource\Pages\EditCatalog;
use App\Filament\Resources\CategoriesResource\Pages\ListCategories;
use App\Filament\Resources\ClientResource\Pages\EditClient;
use App\Filament\Resources\ConfigResource\Pages\EditConfig;
use App\Filament\Resources\ContactResource\Pages\ListContacts;
use App\Filament\Resources\CountersResource\Pages\EditCounters;
use App\Filament\Resources\CredibilityStatementsResource\Pages\EditCredibilityStatements;
use App\Filament\Resources\HomeResource\Pages\EditHome;
use App\Filament\Resources\ProductsResource\Pages\ListProducts;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Panel;
use Filament\PanelProvider;
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
            ->profile()
            ->colors([
                'primary' => '#F3B679',
                'secondary' => '#006600',
                'accent' => '#F29130',
            ])
            ->brandLogo(asset('images/logo.png'))
            ->brandLogoHeight('45px')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
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
            NavigationItem::make('Início')
                ->url(fn (): string => EditHome::getUrl(['record' => 1]))
                ->isActiveWhen(
                    fn (): bool => request()->routeIs(
                        $this->makeWildCardForRouteName(EditHome::getRouteName())
                    )
                )
                ->icon('heroicon-o-home'), // Ícone de casa

            // Estatísticas
            NavigationItem::make('Estatísticas')
                ->url(fn (): string => EditCounters::getUrl(['record' => 1]))
                ->isActiveWhen(
                    fn (): bool => request()->routeIs(
                        $this->makeWildCardForRouteName(EditCounters::getRouteName())
                    )
                )
                ->icon('heroicon-o-chart-bar'), // Ícone de gráfico

            // Sobre Nós
            NavigationItem::make('Sobre Nós')
                ->url(fn (): string => EditAboutUs::getUrl(['record' => 1]))
                ->isActiveWhen(
                    fn (): bool => request()->routeIs(
                        $this->makeWildCardForRouteName(EditAboutUs::getRouteName())
                    )
                )
                ->icon('heroicon-o-information-circle'), // Ícone de informação

            // Catálogo
            NavigationItem::make('Página do Catálogo')
                ->url(fn (): string => EditCatalog::getUrl(['record' => 1]))
                ->isActiveWhen(
                    fn (): bool => request()->routeIs(
                        $this->makeWildCardForRouteName(EditCatalog::getRouteName())
                    )
                )
                ->icon('heroicon-o-book-open') // Ícone de livro aberto
                ->group('Catálogo'),

            NavigationItem::make('Categorias')
                ->url(fn (): string => ListCategories::class::getUrl())
                ->isActiveWhen(
                    fn (): bool => request()->routeIs(
                        $this->makeWildCardForRouteName(ListCategories::getRouteName())
                    )
                )
                ->icon('heroicon-o-tag') // Ícone de etiqueta
                ->group('Catálogo'),

            NavigationItem::make('Produtos')
                ->url(fn (): string => ListProducts::class::getUrl())
                ->isActiveWhen(
                    fn (): bool => request()->routeIs(
                        $this->makeWildCardForRouteName(ListProducts::getRouteName())
                    )
                )
                ->icon('heroicon-o-cube') // Ícone de cubo
                ->group('Catálogo'),

            // Depoimentos
            NavigationItem::make('Credibilidade')
                ->url(fn (): string => EditCredibilityStatements::getUrl(['record' => 1]))
                ->isActiveWhen(
                    fn (): bool => request()->routeIs(
                        $this->makeWildCardForRouteName(EditCredibilityStatements::getRouteName())
                    )
                )
                ->icon('heroicon-o-shield-check'), // Ícone de balão de conversa

            // Orçamento
            NavigationItem::make('Página de Orçamento')
                ->url(fn (): string => EditBudget::getUrl(['record' => 1]))
                ->isActiveWhen(
                    fn (): bool => request()->routeIs(
                        $this->makeWildCardForRouteName(EditBudget::getRouteName())
                    )
                )
                ->icon('heroicon-o-currency-dollar') // Ícone de dólar
                ->group('Orçamento'),

            NavigationItem::make('Contatos')
                ->url(fn (): string => ListContacts::getUrl())
                ->isActiveWhen(
                    fn (): bool => request()->routeIs(
                        $this->makeWildCardForRouteName(ListContacts::getRouteName())
                    )
                )
                ->icon('heroicon-o-phone') // Ícone de telefone
                ->group('Orçamento'),

            // Clientes
            NavigationItem::make('Clientes')
                ->url(fn (): string => EditClient::getUrl(['record' => 1]))
                ->isActiveWhen(
                    fn (): bool => request()->routeIs(
                        $this->makeWildCardForRouteName(EditClient::getRouteName())
                    )
                )
                ->icon('heroicon-o-user-group'), // Ícone de grupo de usuários

            // Configurações
            NavigationItem::make('Configurações')
                ->url(fn (): string => EditConfig::getUrl(['record' => 1]))
                ->isActiveWhen(
                    fn (): bool => request()->routeIs(
                        $this->makeWildCardForRouteName(EditConfig::getRouteName())
                    )
                )
                ->icon('heroicon-o-cog') // Ícone de engrenagem
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
