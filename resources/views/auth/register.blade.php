<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <img src="{{asset('/img/Logo_transparent.png')}}" width="450"/>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- First Name -->
            <div>
                <x-label for="first_name" :value="__('First Name')"/>

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                         :value="old('first_name')" required autofocus/>
            </div>

            <!-- Last Name -->
            <div>
                <x-label for="last_name" :value="__('Last Name')"/>

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                         required/>
            </div>

            <!-- Username -->
            <div>
                <x-label for="user_name" :value="__('Username')"/>

                <x-input id="user_name" class="block mt-1 w-full" type="text" name="user_name" :value="old('user_name')"
                         required/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')"/>

                <x-input id="email" class="" type="email" name="email" :value="old('email')" required/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')"/>

                <x-input id="password" class=""
                         type="password"
                         name="password"
                         required autocomplete="new-password"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                <x-input id="password_confirmation" class=""
                         type="password"
                         name="password_confirmation" required/>
            </div>

            <!-- Promotions -->
            <div class="form-check mt-4">
                <x-input id="promotions" class="form-check-input"
                         type="checkbox"
                         name="promotions" :value="old('promotions')"/>
                <x-label for="promotions" class="form-check-label" style="margin-left:15px;" :value="__('Check this box if you wish to receive promotions')"/>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a class="text-muted" href="{{ route('login') }}" style="margin-right: 15px; margin-top: 15px;">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
