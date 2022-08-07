<?php

namespace Modules\appointment\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\appointment\Http\Middleware\SetLocale;
use Modules\appointment\Repository\AppointmentRepositoryInterface;
use Modules\appointment\Repository\EloquentAppointmentRepository;

class ModuleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AppointmentRepositoryInterface::class,EloquentAppointmentRepository::class);
        $this->loadMigrationsFrom(base_path('modules/appointment/database/migrations'));
        require_once base_path('modules/appointment/helpers.php');

        $this->app['router']->aliasMiddleware('setlocale', SetLocale::class);

        add_panel_menu([
            'label'=>'قرارملاقات ها',
            'icon'=>'mdi-calendar',
            'access'=>'appointment',
            'child'=>[
                ['url'=>url('admin/system-calendar'),'label'=>'تقویم','access'=>'calendar','target'=>'_blank'],
                ['url'=>url('admin/userRole'),'label'=>'نقش های کاربری','access'=>'users','accessValue'=>'user_access'],
                ['url'=>url('admin/user/sms/channel'),'label'=>'تنظیمات ارسال پیامک','access'=>'users','accessValue'=>'user_access'],
            ]
        ],15);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {


    }
}
