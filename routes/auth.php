<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContract;

// ログイン画面を表示する
Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

// 会員登録画面を表示する
Route::get('/register', function () {
    return view('auth.register');
})->middleware('guest')->name('register');

// ログアウト処理を実行する
Route::post('/logout', function (Request $request) {
    // 現在のユーザーをログアウトする
    Auth::logout();

    // セッションを無効化する
    $request->session()->invalidate();

    // CSRFトークンを再生成する
    $request->session()->regenerateToken();

    // カスタムLogoutResponseに遷移先の決定を任せる
    return app(LogoutResponseContract::class)->toResponse($request);
})->middleware('auth')->name('logout');