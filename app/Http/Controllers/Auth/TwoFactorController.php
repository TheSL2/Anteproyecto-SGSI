<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\View\View;
use PragmaRX\Google2FA\Google2FA;

class TwoFactorController extends Controller
{

    public function show(Request $request): View
    {
        $user = $request->user();
        $google2fa = new Google2FA();

        if (! $user->google2fa_secret) {
            $secret = $google2fa->generateSecretKey();
            $user->google2fa_secret = Crypt::encrypt($secret);
            $user->save();
        } else {
            $secret = Crypt::decrypt($user->google2fa_secret);
        }

        return view('auth.two-factor.setup', [
            'secret' => $secret,
            'enabled' => $user->google2fa_enabled,
        ]);
    }


    public function confirm(Request $request): RedirectResponse
    {
        $request->validate([
            'one_time_password' => ['required', 'digits:6'],
        ]);

        $user = $request->user();
        $google2fa = new Google2FA();
        $secret = Crypt::decrypt($user->google2fa_secret);

        $valid = $google2fa->verifyKey($secret, $request->one_time_password);

        if (! $valid) {
            return back()->withErrors([
                'one_time_password' => 'El código no es válido, intenta de nuevo.',
            ]);
        }

        $user->google2fa_enabled = true;
        $user->save();

        $request->session()->put('2fa_verified', true);

        return redirect()->route('dashboard')->with('status', '2FA activado correctamente.');
    }


    public function disable(Request $request): RedirectResponse
    {
        $user = $request->user();
        $user->google2fa_enabled = false;
        $user->google2fa_secret = null;
        $user->save();

        $request->session()->forget('2fa_verified');

        return redirect()->route('dashboard')->with('status', '2FA desactivado.');
    }


    public function challenge(): View
    {
        return view('auth.two-factor.challenge');
    }


    public function verify(Request $request): RedirectResponse
    {
        $request->validate([
            'one_time_password' => ['required', 'digits:6'],
        ]);

        $user = Auth::user();
        $google2fa = new Google2FA();
        $secret = Crypt::decrypt($user->google2fa_secret);

        $valid = $google2fa->verifyKey($secret, $request->one_time_password);

        if (! $valid) {
            return back()->withErrors([
                'one_time_password' => 'Código incorrecto.',
            ]);
        }

        $request->session()->put('2fa_verified', true);

        return redirect()->intended(route('dashboard'));
    }
}