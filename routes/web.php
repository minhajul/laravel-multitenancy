<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::get('/', function () {
            return response()->json(User::all());
        });
    });
}

Route::get('/dashboard', function () {
    return view('welcome');
});

