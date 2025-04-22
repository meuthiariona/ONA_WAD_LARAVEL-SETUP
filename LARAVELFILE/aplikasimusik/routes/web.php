<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Musik;


Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('/', function () {
    $musiks = Musik::all();
    return view('musik', compact('musiks'));
})->middleware('auth');

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah',
    ]);
});


Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
});

