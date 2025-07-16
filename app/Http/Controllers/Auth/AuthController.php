<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function createLogin(): View
    {
        return view('auth.login');
    }

    public function createRegister(): View
    {
        return view('auth.register');
    }

    public function oAuthRedirect(string $provider): RedirectResponse
    {
        return Socialite::driver($provider)->redirect();
    }

    public function oAuthCallback(string $provider)
    {
        $oauthUser = Socialite::driver($provider)->user();

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

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'bail|email|required|max:255',
            'password' => 'bail|required|min:8|max:255'
        ]);

        if (!Auth::attempt($validated)) {
            return back()
                ->withErrors([
                    'email' => 'The provided credentials does not match our records.'
                ]);
        }

        $request->session()->regenerate();

        return to_route('app.home');
    }

    public function create(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'bail|email|required|unique:users|max:255',
            'password' => 'bail|required|min:8|confirmed|max:255',
            'username' => 'bail|required|min:2|max:15',
        ]);

        $user = User::query()->create([
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => Hash::make($request->get('password')),
        ]);

        // Login user
        Auth::login($user);

        return to_route('app.home');
    }
}
