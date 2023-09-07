<?php

if (! function_exists('status')) {
    function status($status)
    {
        if ($status == 1) {
            return '<span class="badge badge-success">Active</span>';
        }

        return '<span class="badge badge-danger">Inactive</span>';
    }
}

if (! function_exists('current_language')) {
    function current_language()
    {
        return match (session('locale')) {
            'en' => __('English'),
            'sv' => __('Swedish'),
            'bn' => __('Bangla'),
            'no' => __('Norwegian'),
            'da' => __('Danish'),
            'nl' => __('Dutch'),
            default => __('English'),
        };
    }
}

if (! function_exists('visibility')) {
    function visibility($visibility): string
    {
        return match ($visibility) {
            1 => '<span class="badge badge-danger">Not visible</span>',
            2 => '<span class="badge badge-info">Catalog</span>',
            3 => '<span class="badge badge-info">Search</span>',
            default => '<span class="badge badge-success">Catalog, Search</span>',
        };
    }
}

if (! function_exists('_a')) {
    function _a($amount)
    {
        if (is_float($amount)) {
            return number_format($amount, 2, '.', '');
        }

        return $amount;
    }
}

if (! function_exists('amount')) {
    function amount($amount)
    {
        if (is_float($amount)) {
            return number_format($amount, 2, '.', '');
        }

        return $amount;
    }
}

if (! function_exists('get_all_countries')) {
    function get_all_countries()
    {
        return cache()->remember('countries', 60 * 60 * 24, function () {
            return \App\Models\Country::select(['iso', 'name'])->get();
        });
    }
}

if (! function_exists('active_menu')) {
    function active_menu($url)
    {
        return request()->routeIs('admin.'.$url) ? 'active' : '';
        //return request()->is(config('site.admin_url').'/'.$url)?'active':'';
    }
}
