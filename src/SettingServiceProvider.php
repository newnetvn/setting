<?php

namespace Newnet\Setting;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Newnet\Setting\Contracts\SettingInterface;
use Newnet\Setting\Models\Setting as SettingModel;
use Newnet\Setting\Repositories\SettingRepositoryInterface;
use Newnet\Setting\Repositories\SettingRepository;

class SettingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(SettingRepositoryInterface::class, function () {
            return new SettingRepository(new SettingModel);
        });

        $this->app->singleton(SettingInterface::class, Setting::class);
    }

    public function boot()
    {
        $this->registerMigrationPath();

        $this->publishes([
            __DIR__ . '/../config/setting.php' => config_path('setting.php'),
        ], 'setting');

        $this->registerBladeDirectives();
    }

    protected function registerMigrationPath()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    protected function registerBladeDirectives()
    {
        Blade::directive('setting', function ($expression) {
            return "<?php echo setting($expression); ?>";
        });
    }
}
