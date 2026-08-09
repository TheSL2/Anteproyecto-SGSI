<x-app-layout>
    <div class="max-w-xl mx-auto py-10">
        <h2 class="text-xl font-semibold mb-4">Autenticación de dos factores (2FA)</h2>

        @if ($enabled)
            <div class="p-4 bg-green-50 border border-green-200 rounded mb-4">
                2FA está <strong>activo</strong> en tu cuenta.
            </div>
            <form method="POST" action="{{ route('2fa.disable') }}">
                @csrf
                <x-primary-button class="bg-red-600 hover:bg-red-700">
                    Desactivar 2FA
                </x-primary-button>
            </form>
        @else
            <p class="mb-4 text-sm text-gray-600">
                Escanea este código QR con Google Authenticator, Authy o similar.
            </p>

            <div class="mb-4">
                {!! \PragmaRX\Google2FALaravel\Facade::getQRCodeInline(
                    config('app.name'), auth()->user()->email, $secret
                ) !!}
            </div>

            <p class="text-sm text-gray-500 mb-4">
                O ingresa manualmente esta clave: <code class="bg-gray-100 px-1">{{ $secret }}</code>
            </p>

            <form method="POST" action="{{ route('2fa.confirm') }}">
                @csrf
                <x-input-label for="one_time_password" value="Código de verificación" />
                <x-text-input id="one_time_password" name="one_time_password"
                    class="block mt-1 w-full" inputmode="numeric" maxlength="6" autofocus required />
                <x-input-error :messages="$errors->get('one_time_password')" class="mt-2" />

                <x-primary-button class="mt-4">
                    Activar 2FA
                </x-primary-button>
            </form>
        @endif
    </div>
</x-app-layout>