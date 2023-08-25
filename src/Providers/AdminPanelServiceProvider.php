<?php

namespace Atul4065\Coon\Providers;

use Illuminate\Support\ServiceProvider;

class AdminPanelServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'coon-views');
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/admin/coon'),
            __DIR__ . '/../../coon.php' => config_path('coon.php'),
        ], 'public');
    }
}
