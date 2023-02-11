<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function handle($request, $next)
    {
        if (auth()->user()->isAdmin()) {
            return $next($request);
        }
        return redirect('menu');
    }

    public function menu()
    {
        if (Auth::check()) {
            return view('menu');
        }

        return redirect("register")->withSuccess('You are not allowed to access');
    }

    public function logout(): Redirector|Application|RedirectResponse
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
