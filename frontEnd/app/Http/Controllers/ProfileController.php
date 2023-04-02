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
        return view("/profile", ["countries" => Country::select("id", "country_name")->get()]);
    }

    public function update($id, Request $request)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'nickname' => [
                'required', 'string', 'min:4', 'max:20',
                Rule::unique('users')->ignore(auth()->id()),
            ],
            'avatar' => 'mimes:png,jpg,jpeg|max:2048',
            'email' => [
                'required', 'string', 'email', 'max:255',
                Rule::unique('users')->ignore(auth()->id()),
            ],
            'name' => 'regex:/^[a-zA-Z]+$/u|max:50',
            'surname' => 'regex:/^[a-zA-Z]+$/u|max:50',
        ]);
        $user->update($request->only(['nickname', 'name', 'surname', 'email', 'country_id', 'longitude']));

        if ($request->hasFile('avatar')) {
            $filename = time() . '.' . $request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->move(public_path('assets/avatars'), $filename);
            $user->avatar = $filename;
        }
        $user->save();
        abort_if($user->id !== auth()->id(), 403);

        return redirect('profile')->with('success', '');
    }

    public function deleteAvatar()
    {
        $user = auth()->user();
        $defaultAvatar = 'icon.png';

        if ($user->avatar !== $defaultAvatar) {
            $user->update(['avatar' => $defaultAvatar]);
            Storage::delete($user->avatar);
        }
        return redirect('profile');
    }


    public function delete($id)
    {
        User::destroy($id);
        Auth::logout();
        Session::invalidate();
        return redirect('login');
    }
}
