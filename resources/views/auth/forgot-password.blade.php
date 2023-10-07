<x-guest-layout>
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-none tracking-tight text-gray-900 md:text-2xl">
            {{ __('page.auth.forgot_password.title') }}
        </h1>
        <p class="text-base leading-tight tracking-tight text-gray-700 md:text-base">
            {{ __('page.auth.forgot_password.description') }}
        </p>
        <form method="POST" action="{{ route('password.email') }}" class="space-y-4 md:space-y-6">
            @csrf

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('form.label.email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" autocomplete="username" required
                    autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <x-primary-button type="submit">
                {{ __('button.account_restore') }}
            </x-primary-button>

            <p class="text-sm font-light text-gray-500 ">
                <span>{{ __('page.auth.message.already_have_account') }}</span>
                <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:underline">
                    {{ __('button.login') }}
                </a>
            </p>
        </form>
    </div>
</x-guest-layout>
