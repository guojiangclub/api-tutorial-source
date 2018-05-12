<?php
/**
 * Created by PhpStorm.
 * User: 32780
 * Date: 2018/5/12
 * Time: 16:16
 */

namespace iBrand\Server\Providers;


use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'iBrand\Server\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
    }


    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {

        $api = app('Dingo\Api\Routing\Router');

        $api->version('v1',
            ['middleware' => 'api', 'namespace' => $this->namespace], function ($router) {
                require __DIR__ . '/../routes/api.php';
            });
    }
}