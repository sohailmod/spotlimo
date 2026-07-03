<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

if (! function_exists('theme_options')) {
    function theme_options()
    {
        return Cache::remember('settings', 10, function () {
            return Setting::all();
        });
    }
}

if (! function_exists('format_price')) {
    function format_price($price): string
    {
        $numberAfterDot = 2;
        if (is_numeric($price)) {
            $price = preg_replace('/[^0-9,.]/s', '', $price);
        }
        $price = '$'.number_format($price, $numberAfterDot, '.', ',');

        return $price;
    }
}

if (! function_exists('format_date')) {
    function format_date($date): string
    {
        return Carbon\Carbon::parse($date)->format('M d Y');
    }
}

if (! function_exists('format_time')) {
    function format_time($time): string
    {
        return Carbon\Carbon::parse($time)->format('g:i A');
    }
}

if (! function_exists('get_order_code')) {
    function get_order_code($id): string
    {
        $text = str_pad($id, 8, '0', STR_PAD_LEFT);

        return str_pad($text, 10, env('ORDER_PRIFIX'), STR_PAD_LEFT);
    }
}
