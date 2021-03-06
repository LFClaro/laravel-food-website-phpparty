<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <img src="{{asset('/img/Logo_transparent.png')}}" width="450"/>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')"/>

                <x-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')"/>

                <x-input id="password" class=""
                         type="password"
                         name="password"
                         required autocomplete="current-password"/>
            </div>

            <!-- Remember Me -->
            <div class="mt-3 form-check">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label for="remember_me" class="form-check-label text-sm">
                    {{ __('Remember me') }}
                </label>
            </div>

            <div class="d-flex justify-content-center mt-4 flex-column">
                <x-button class="p-2">
                    {{ __('Log in') }}
                </x-button>
                @if (Route::has('password.request'))
                    <a class="text-muted p-2 align-self-center" href="{{ route('password.request') }}"
                       style="margin-top: 15px;">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            @if (Route::has('register'))
                <div class="d-flex justify-content-center mt-4 flex-column">
                    <x-button class="p-2">
                        <a href="{{ route('register') }}" class="text-light text-decoration-none">Register</a>
                    </x-button>
                </div>
            @endif
        </form>
    </x-auth-card>
</x-guest-layout>
