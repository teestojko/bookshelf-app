<?php

namespace App\Http\Responses;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContract;

class LogoutResponse implements LogoutResponseContract
{
    /**
     * ログアウト完了後のレスポンスを返す。
     *
     * @param Request $request ログアウト処理後のリクエスト
     * @return RedirectResponse ログイン画面へのリダイレクト
     */
    public function toResponse(Request $request): RedirectResponse
    {
        // セッション破棄後はログイン画面へ遷移する
        return redirect()->route('login');
    }
}