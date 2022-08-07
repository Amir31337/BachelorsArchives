<?php
namespace Modules\appointment;

class Module
{
    public function set_user_access_list($access)
    {
        $access['appointment'] = [
            'label' => 'قرارملاقات',
            'access' => [
                'discount_edit' => ['label' => 'ثبت و ویرایش کاربر', 'routes' => [
                    'users.index', 'users.create', 'users.store', 'users.edit', 'users.update'
                ]],
                'remove_users' => ['label' => 'حذف کاربر', 'routes' => ['users.index', 'users.destroy']],
                'restore_users' => ['label' => 'بازیابی کاربر', 'routes' => ['users.index', 'users.restore']],
                'user_access' => ['label' => 'مدیریت نقش های کاربری', 'routes' => ['userRole.index', 'userRole.create', 'userRole.store', 'userRole.edit', 'userRole.update', 'userRole.destroy', 'userRole.restore', 'userRole.access', 'userRole.add_access']],
                'user_message' => ['label' => 'مدیریت پیام ها', 'routes' => [
                    'users.index', 'user.message.index', 'user.message.show', 'user.message.create', 'user.message.store', 'user.message.answer'
                ]],
            ]
        ];

        return $access;
    }

    public function registerJsFile($theme = 'all')
    {
        $routeName = getRouteName();
        if ($routeName == "systemCalendar") {
            return [
                'moment' => asset('modules/appointment/moment.min.js'),
                'fullcalendar_js' => asset('modules/appointment/fullcalendar/lib/main.min.js'),
                'fa' => asset('modules/appointment/fullcalendar/lib/locales/fa.js')
            ];
        }
    }

    public function registerCssFile($theme = 'all')
    {
        $routeName = getRouteName();
        if ($routeName == "systemCalendar") {
            return [
                'fullcalendar' => asset('modules/appointment/fullcalendar/lib/main.min.css')
            ];
        }
    }
}
