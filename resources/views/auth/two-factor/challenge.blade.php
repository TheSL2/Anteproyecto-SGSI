<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        Ingresa el código de 6 dígitos de tu app de autenticación.
    </div>

    <form method="POST" action="{{ route('2fa.verify') }}">
        @csrf
        <x-input-label for="one_time_password" value="Código de verificación" />
        <x-text-input id="one_time_password" name="one_time_password"
            class="block mt-1 w-full" inputmode="numeric" maxlength="6" autofocus required />
        <x-input-error :messages="$errors->get('one_time_password')" class="mt-2" />

        <x-primary-button class="mt-4">
            Verificar
        </x-primary-button>
    </form>
</x-guest-layout>