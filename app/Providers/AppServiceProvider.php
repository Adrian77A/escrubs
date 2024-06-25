<?php

namespace App\Providers;

use App\Models\Banner;
use App\Policies\BannerPolicy;
use Illuminate\Support\ServiceProvider;
use Amendozaaguiar\FilamentRouteStatistics\FilamentRouteStatisticsPlugin;
use Filament\Panel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
      //
    }
    
    public function panel(Panel $panel): Panel
    {
        return $panel
            // ...
            ->plugins([
                FilamentRouteStatisticsPlugin::make(),
                //...
            ]);
    }
}
