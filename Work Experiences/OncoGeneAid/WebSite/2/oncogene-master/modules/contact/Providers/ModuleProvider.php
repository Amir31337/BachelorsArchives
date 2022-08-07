<?php

namespace Modules\contact\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\contact\Repository\ContactRepositoryInterface;
use Modules\contact\Repository\EloquentContactRepository;
use Request;
use Config;
class ModuleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ContactRepositoryInterface::class,EloquentContactRepository::class);
        $this->loadMigrationsFrom(base_path('modules/contact/database/migrations'));

//        add_panel_menu([
//            'label'=>'صفحات اضافی',
//            'icon'=>'mdi-file-document-outline',
//            'access'=>'pages',
//            'child'=>[
//                ['url'=>url('admin/pages'),'label'=>'مدیریت صفحات','access'=>'pages'],
//                ['url'=>url('admin/pages/create'),'label'=>'افزودن صفحه جدید','access'=>'pages'],
//            ]
//        ]);
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
