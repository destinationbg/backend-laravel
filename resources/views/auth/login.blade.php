<x-guest-layout>
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-none tracking-tight text-gray-900 md:text-2xl">
            {{ __('page.auth.login.title') }}
        </h1>
        <p class="text-base leading-tight tracking-tight text-gray-700 md:text-base">
            {{ __('page.auth.login.description') }}
        </p>
        <form method="POST" action="{{ route('login') }}" class="space-y-4 md:space-y-6">
            @csrf

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('form.label.email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" autocomplete="username" required
                    autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('form.label.password')" />
                <x-text-input id="password" type="password" name="password" autocomplete="current-password" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between">
                <!-- Remember Me -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <x-text-input id="remember_me" type="checkbox" name="remember_me" />
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="remember_me" class="text-gray-500">{{ __('form.label.remember_me') }}</label>
                    </div>
                </div>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm font-medium text-primary-600 hover:underline">
                        {{ __('button.forgot_password') }}
                    </a>
                @endif
            </div>

            <x-primary-button type="submit">
                {{ __('button.login') }}
            </x-primary-button>

            <p class="text-sm font-light text-gray-500 ">
                <span>{{ __('page.auth.message.dont_have_account') }}</span>
                <a href="{{ route('register') }}" class="font-medium text-primary-600 hover:underline">
                    {{ __('button.register') }}
                </a>
            </p>
        </form>
    </div>
</x-guest-layout>
