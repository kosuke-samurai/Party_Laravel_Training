<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UsersTopiRequest;

class AdminLoginController extends Controller
{
    public function showAdminLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {

        $credentials =
            $request->validate([
                'email' => ['required'],
                'password' => ['required'],
            ]);


        //dd($credentials);

        if (Auth::guard('administrators')->attempt($credentials)) {

            // セッションを再生成する処理(セキュリティ対策)
            $request->session()->regenerate();

            // ログインしたら管理画面トップにリダイレクト
            return redirect()->route('admin.users_topi.index');
        }

        return back()->withErrors([
            'login' => ['ログインに失敗しています'],
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // ログアウトしたらログインフォームにリダイレクト
        return redirect()->route('admin.users_topi.index')->with([
            'logout_msg' => 'ログアウトしました',
        ]);
    }
}
