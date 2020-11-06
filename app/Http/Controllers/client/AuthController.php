<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function login()
    {
        return view("client.pages.auth.login");
    }

    public function handle_login(LoginRequest $request)
    {
        $user = User::where("Email", "=", $request->input("email"));

        if ($user->exists() && Hash::check($request->input("password"), $user->first()->Password)) {
            // perfect, to login now
            
            Auth::loginUsingId($user->first()->UserId);

            return redirect()->intended("/")->withErrors([
                "success" => "login successfully"
            ]);
        } else {
            // incorrect password, error alert
            return redirect()
                ->route("auth.login") // to page
                ->withInput() // old value
                ->withErrors([
                    "password" => "Incorrect password"
                ]);
        }
    }

    public function handle_logout()
    {
        Auth::logout();

        return redirect()->route("auth.login")->withErrors([
            "success" => "Đăng xuất thành công"
        ]);
    }
}
