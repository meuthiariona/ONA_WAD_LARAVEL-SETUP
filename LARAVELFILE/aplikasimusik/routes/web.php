<?php

use App\Models\Musik;

Route::get('/', function () {
    $musiks = Musik::all();
    return view('musik', compact('musiks'));
});
