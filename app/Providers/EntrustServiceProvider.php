<?php
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 24/12/2016
 * Time: 21:45
 */

namespace App\Providers;



class EntrustServiceProvider extends \Zizaco\Entrust\EntrustServiceProvider
{   /**
 * Bootstrap the application events.
 *
 * @return void
 */
    public function boot()
    {
        // Publish config files
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('entrust.php'),
        ]);

        // Register commands
        $this->commands('command.entrust.migration');

        // Register blade directives
        $this->bladeDirectives();
    }

    /**
     * Register the blade directives
     *
     * @return void
     */
    private function bladeDirectives()
    {

    }
}
