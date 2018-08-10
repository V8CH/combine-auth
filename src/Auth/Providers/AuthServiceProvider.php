<?php
/**
 *
 * @author    Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

namespace V8CH\LaravelAuthApi\Providers;

use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

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
        $this->loadRoutesFrom(__DIR__ . '/../../../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../../views', 'combine');
        $this->registerPolicies();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Factories
        $this->registerEloquentFactoriesFrom(__DIR__ . '/../../../factories');
        // View Composers
        View::composer(
            'combine::laravel-auth-spa',
            function ($view) {
                $errors = null;
                if (!is_null(session('errors'))) {
                    foreach (session('errors')->getMessages() as $key => $message) {
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
                $view->with(
                    [
                    'posted' => json_encode($posted),
                    'serverErrors' => json_encode($errors),
                    ]
                );
            }
        );
    }

    /**
     * Register factories.
     *
     * @param  string $path
     * @return void
     */
    protected function registerEloquentFactoriesFrom($path)
    {
        $this->app->make(EloquentFactory::class)->load($path);
    }

    /**
     * Register policies.
     *
     * @return void
     */
    public function registerPolicies()
    {
        foreach ($this->policies as $key => $value) {
            Gate::policy($key, $value);
        }
    }
}
