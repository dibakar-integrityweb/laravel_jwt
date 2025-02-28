<?php

use App\Models\Setting;
use App\Models\User;

if (!function_exists('user_details')) {
    function user_details($user_id)
    {
        try {
            $user = User::where('id', $user_id)->first();
        } catch (Exception $exception) {
            return null;
        }
       return $user;
    }
}

if (!function_exists('user_role')) {
    function user_role($role_id)
    {
        switch($role_id){
            case(1):
                $role = 'Super Admin';
                break;
            case(2):
                $role = 'Admin';
                break;
            default:
                $role = 'User';
        }
       return $role;
    }
}

if (!function_exists('theme_style')) {
    function theme_style($key)
    {
        $data = [];
        $themeSetting = Setting::where('key', $key)->first();
        if ($themeSetting) {
            $theme = json_decode($themeSetting->value, true);
            $data['data_style'] = $theme['data_style'];
            $data['data_style_class'] = $theme['data_style_class'];
        }else{
            $data['data_style'] = 'light';
            $data['data_style_class'] = 'light-style';
        }
       return $data;
    }
}
