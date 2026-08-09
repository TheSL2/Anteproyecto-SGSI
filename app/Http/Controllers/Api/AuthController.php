<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::validate($credentials)) {
            throw ValidationException::withMessages([
                'email' => ['Las credenciales no coinciden con nuestros registros.'],
            ]);
        }

        $user = User::where('email', $credentials['email'])->firstOrFail();

        if (! $user->activo) {
            throw ValidationException::withMessages([
                'email' => ['Este usuario se encuentra desactivado.'],
            ]);
        }

        if ($user->tieneDosFactorActivo()) {
            return response()->json([
                'requires_2fa' => true,
                'user_id' => $user->id,
            ]);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        Log::info('Login exitoso', ['user_id' => $user->id, 'email' => $user->email]);

        return response()->json([
            'token' => $token,
            'user' => $user,
        ]);
    }

    public function logout(Request $request)
    {
        Log::info('Logout', ['user_id' => $request->user()->id]);

        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Sesion cerrada correctamente.']);
    }
}