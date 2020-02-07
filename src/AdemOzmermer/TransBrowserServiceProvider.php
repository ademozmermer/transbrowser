<?php

namespace AdemOzmermer\TransBrowser;

use Illuminate\Support\ServiceProvider;

class TransBrowserServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this
            ->registerMiddleware()
            ->loadConfig();
    }

    private function loadConfig() {
        $this->publishes([
            __DIR__.'/config/transbrowser.php' => config_path('transbrowser.php')
        ]);

        return $this;
    }

    private function registerMiddleware() {
        /** @var \Illuminate\Routing\Router $router */
        $router = $this->app['router'];

        $router->aliasMiddleware('transbrowser', Middleware\TransBrowserMiddleware::class);

        return $this;
    }
}
