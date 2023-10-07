<x-guest-layout>
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-none tracking-tight text-gray-900 md:text-2xl">
            {{ __('page.auth.register.title') }}
        </h1>
        <p class="text-base leading-tight tracking-tight text-gray-700 md:text-base">
            {{ __('page.auth.register.description') }}
        </p>
        <form method="POST" action="{{ route('register') }}" class="space-y-4 md:space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('form.label.your_names')" />
                <x-text-input id="name" type="name" name="name" :value="old('name')" autocomplete="name" required
                    autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('form.label.email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" autocomplete="username" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('form.label.password')" />
                <x-text-input id="password" type="password" name="password" autocomplete="new-password" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('form.label.password_confirm')" />
                <x-text-input id="password_confirmation" type="password" name="password_confirmation" autocomplete="new-password"
                    required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <x-primary-button type="submit">
                {{ __('button.register') }}
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
