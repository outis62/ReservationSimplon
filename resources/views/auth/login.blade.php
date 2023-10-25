<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf


        <div class="login">
  <div class="form">
    <input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" >
    <input type="password" placeholder="Password" id="password" class="block mt-1 w-full"
                            name="password"
                            required autocomplete="current-password">
    <input type="hidden" name="role" value="apprenant">
  </div>
</div>

        <!-- Remember Me -->
        <div class="block">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 text-decoration-none" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié?') }}
                </a>
            @endif
            <x-primary-button class="ml-3 btn-danger">
                {{ __('Se Connecter') }}
            </x-primary-button>
            <a href="#" class="btn" style="color: blue; margin-left: 35px">Inscription Apprenant.e.s</a>
        </div>
    </form>
</x-guest-layout>
