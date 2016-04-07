<?php namespace AlexBowers\Modules;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerMigrationGenerator();
    }

    private function registerMigrationGenerator()
    {
        $this->app->singleton('command.modules.migrate', function($app) {
            return $app['AlexBowers\Modules\Commands\MigrationCommand'];
        });

        $this->commands('command.modules.migrate');
    }
}