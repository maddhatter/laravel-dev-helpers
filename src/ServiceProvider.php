<?php namespace MaddHatter\DevHelpers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //Include third party service providers
        $this->app->register(\Laracasts\Generators\GeneratorsServiceProvider::class);
        $this->app->register(\MaddHatter\ViewGenerator\ServiceProvider::class);
        $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);

        //Register commands
        $this->commands(Console\DevelopCommand::class);
    }

}

