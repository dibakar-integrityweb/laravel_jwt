<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('settings')) {
            $mailData = Setting::where('key','mail_config')->first();
            $mailSetting = json_decode($mailData->value,true);
            $appTitle = Setting::where('key','app_name')->value('value');
            $mail_from_name = isset($mailSetting['from_name']) ? ($mailSetting['from_name']) : $appTitle;
            if ($mailSetting) {
                $config = array(
                    'driver'     => $mailSetting['mail_driver'],
                    'host'       => $mailSetting['mail_host'],
                    'port'       => $mailSetting['mail_port'],
                    'from'       => [
                        'address' => $mailSetting['mail_address'],
                        'name' => $mail_from_name
                    ],
                    'encryption' => $mailSetting['encryption'],
                    'username'   => $mailSetting['username'],
                    'password'   => $mailSetting['password'],
                    'sendmail'   => '/usr/sbin/sendmail -bs',
                    'pretend'    => false,
                );
                Config::set('mail', $config);
            }
        }

        if (Schema::hasTable('settings')) {
            $timeZone = Setting::where('key','timezone')->value('value');
            if($timeZone){
                config(['app.timezone' => $timeZone]);
                date_default_timezone_set($timeZone);
            }else{
                config('app.timezone');
            }
        }
    }
}
