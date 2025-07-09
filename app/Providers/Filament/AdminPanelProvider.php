<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;
use App\Filament\Widgets\AccountWidget;
use App\Filament\Widgets\FilamentInfoWidget;
use App\Filament\Resources\EventResource;
use App\Filament\Resources\CourseResource;
use App\Filament\Widgets\CalendarWidget;
use App\Filament\Widgets\StatsDashboard;
use App\Filament\Widgets\BlogPostsDashboard;
use App\Filament\Widgets\NotificationsWidget;
use App\Filament\Widgets\ProgressDashboard;
use App\Filament\Widgets\ChartDashboard;
use App\Filament\Pages\CustomWelcomePage;

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
                'primary' => Color::Amber,
            ])
            ->resources([
                EventResource::class,
                CourseResource::class,
                // Tambah resource lain kalau ada
            ])
            ->pages([
                Pages\Dashboard::class,
                CustomWelcomePage::class, // Custom page untuk welcome
            ])
            ->spa()
            ->sidebarCollapsibleOnDesktop()
            ->colors([
            'danger' => Color::Rose,
            'gray' => Color::Gray,
            'info' => Color::Blue,
            'primary' => Color::Blue,   
            'success' => Color::Emerald,
            'warning' => Color::Orange,
        ])
            ->widgets([
                CalendarWidget::class,
                StatsDashboard::class,
                BlogPostsDashboard::class,
                // NotificationsWidget::class, 
                // ProgressDashboard::class, 
             
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
            ->plugin(
                FilamentFullCalendarPlugin::make()
                    ->editable(true)
                    ->selectable(true)
                    ->locale('id')
            );
    }
}
