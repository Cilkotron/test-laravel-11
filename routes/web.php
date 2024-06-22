<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;

Route::get('/', function () {
    $date = Carbon::parse('2024-03-28T13:30:42Z');
    //$marchDate = $date->isoFormat('DD MMM YYYY');
    $marchDate = $date->translatedFormat('j M Y');
    return view('welcome', ['date' => $marchDate ]);
});
