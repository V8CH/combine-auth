<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

namespace V8CH\Combine\Auth\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use V8CH\Combine\Core\Providers\RegistersEloquentFactories;
use V8CH\Combine\Core\Providers\RegistersPolicies;

class AuthServiceProvider extends ServiceProvider
{

    use RegistersEloquentFactories, RegistersPolicies;

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [];

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../../migrations');
        $this->loadRoutesFrom(__DIR__ . '/../../../routes/api.php');
        $this->loadRoutesFrom(__DIR__ . '/../../../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../../views', 'combine');
        $this->publishes([__DIR__ . '/../../../config/combine-auth.php' => config_path('combine-auth.php')]);
        $this->registerPolicies();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Configs
        $this->mergeConfigFrom(__DIR__ . '/../../../config/combine-auth.php', 'combine-auth');
        config(['auth.guards.api.driver' => config('combine-auth.auth.guards.api.driver')]);
        config(['auth.guards.api.provider' => config('combine-auth.auth.guards.api.provider')]);
        $authProvidersUsersModel = config('combine-auth.auth.providers.users.model');
        config(['auth.providers.users.model' => $authProvidersUsersModel]);
        // Factories
        $this->registerEloquentFactoriesFrom(__DIR__ . '/../../../factories');
        // View Composers
        View::composer('combine::granary-auth', function($view) {
            $errors = null;
            if (!is_null(session('errors'))) {
                foreach(session('errors')->getMessages() as $key => $message) {
                    $errors[$key] = $message;
                }
            }
            $posted = null;
            if (!empty(request()->old('email'))) {
                $posted['email'] = request()->old('email');
            }
            if (!empty(request()->old('name'))) {
                $posted['name'] = request()->old('name');
            }
            /** @noinspection PhpUndefinedMethodInspection */
            $view->with([
                'posted' => json_encode($posted),
                'serverErrors' => json_encode($errors),
                ]);
        });
    }
}
