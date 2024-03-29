<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;

class WebController extends Controller
{
    public function swapLocale($locale)
    {
        Cache::set('locale', $locale);
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return Inertia::location(url()->previous());
    }
}
