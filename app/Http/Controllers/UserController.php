<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function handleOauthCallback(string $provider): RedirectResponse
    {
        // Get the user from the oauth provider
        $oauthUser = Socialite::driver($provider)->user();

        // Existing check
        $user = User::query()->firstOrCreate([
            'name' => $oauthUser->getName(),
            'email' => $oauthUser->getEmail(),
            'avatar' => $oauthUser->getAvatar()
        ]);

        // Login user
        Auth::login($user);

        // Redirect back to home
        return redirect()->route('app.home');
    }
    //
}
