<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
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
    protected $namespace = 'App\Http\Controllers\Application';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();

        // 绑定路由对象
        $this->_bootRoutParameterBinders();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
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
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }


    /*
     * 绑定路由参数到对象
     */
    private function _bootRoutParameterBinders() {
        // 自定义解析逻辑
        // https://laravel-china.org/docs/laravel/5.5/routing#implicit-binding
        Route::bind('categorySlug', function($value) {
            return \App\Model\Category::with('articles')->where('slug', '=', $value)->firstOrFail();
        });
        Route::bind('articleSlug', function($value) {
            $a = \App\Model\Article::with('category')->where('slug', '=', $value)->firstOrFail();
            // var_dump($a);
            return $a;
        });
    }
}
