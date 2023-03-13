<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function profile()
    {
        return view("/profile",
            ["countries" => Country::select("id", "country_name")->get()]);
    }

    public function update($id, Request $request)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'nickname' => [
                'required', 'string', 'min:4', 'max:20',
                Rule::unique('users')->ignore(Auth::user()->id),
            ],
            'avatar' => 'mimes:png,jpg,jpeg|max:2048',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
            'name' => 'regex:/^[a-zA-Z]+$/u|max:50',
            'surname' => 'regex:/^[a-zA-Z]+$/u|max:50',
        ]);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('assets/avatars'), $filename);
            $user->avatar = $filename;
        }
        $user->update([
            'nickname' => $request->nickname,
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'country_id' => $request->profileCountry,
        ]);
        if ($user->id !== auth()->id()) {
            abort(403);
        }
        return redirect("profile");
    }

    public function deleteAvatar()
    {
        $user = auth()->user();
        $defaultAvatar = 'icon.png';
        if ($user->avatar !== $defaultAvatar) {
            Storage::delete($user->avatar);
            $user->avatar = $defaultAvatar;
            $user->save();
        }
        return redirect('profile');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        Auth::logout();
        Session::flush();
        $user->delete();
        return redirect('login');
    }
}
