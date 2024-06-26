<?php

if (!function_exists('status')) {
    function status($status)
    {
        if ($status == 1) {
            return '<span class="badge badge-success">Active</span>';
        }

        return '<span class="badge badge-danger">Inactive</span>';
    }
}

if (!function_exists('current_language')) {
    function current_language()
    {
        switch (session('locale')) {
            case 'en':
                return __('English');
                break;
            case 'sv':
                return __('Swedish');
                break;
            case 'bn':
                return __('Bangla');
                break;
            case 'no':
                return __('Norwegian');
                break;
            case 'da':
                return __('Danish');
                break;
            default:
                return __('English');
        }
    }
}

if (!function_exists('visibility')) {
    function visibility($visibility)
    {
        switch ($visibility) {
            case 1:
                return '<span class="badge badge-danger">Not visible</span>';
                break;
            case 2:
                return '<span class="badge badge-info">Catalog</span>';
                break;
            case 3:
                return '<span class="badge badge-info">Search</span>';
                break;
            default:
                return '<span class="badge badge-success">Catalog, Search</span>';
        }
    }
}

if (!function_exists('_a')) {
    function _a($amount)
    {
        if (is_float($amount)) {
            return number_format($amount, 2, '.', '');
        }

        return $amount;
    }
}

if (!function_exists('amount')) {
    function amount($amount)
    {
        if (is_float($amount)) {
            return number_format($amount, 2, '.', '');
        }

        return $amount;
    }
}

if (!function_exists('get_all_countries')) {
    function get_all_countries()
    {
        return cache()->remember('countries', 60 * 60 * 24, function () {
            return \App\Models\Country::select(['iso', 'name'])->get();
        });
    }
}

if (!function_exists('active_menu')) {
    function active_menu($url)
    {
        return request()->routeIs('admin.' . $url) ? 'active' : '';
        //return request()->is(config('site.admin_url').'/'.$url)?'active':'';
    }
}
