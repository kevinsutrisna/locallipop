<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class GoogleController extends Controller
{
    public function redirectToGoogle(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('email', $user->email)->first();
            if ($findUser) {
                if (!$findUser->google_id) {
                    $findUser->update([
                        'google_id' => $user->id,
                    ]);
                }
                Auth::login($findUser);
            } else {
                $findUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt("12345678"),
                ]);
                Auth::login($findUser);
            }
            return redirect('home');
        } catch (\Exception $e) {
            return redirect('login')->withErrors('Authentication failed.');
        }
    }
}
