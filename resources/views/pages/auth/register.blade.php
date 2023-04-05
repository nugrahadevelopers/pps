<x-guest-layout>
    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}

    <section>
        <div class="relative flex justify-center min-h-screen overflow-hidden lg:px-0 md:px-12">
            <div
                class="relative z-10 flex flex-col flex-1 px-4 py-10 bg-white shadow-sm lg:py-24 md:flex-none md:px-28 sm:justify-center">
                <div class="w-full max-w-md mx-auto md:max-w-sm md:px-0 md:w-96 sm:px-4">
                    <div class="flex flex-col">
                        <div>
                            <h2 class="text-3xl text-black">{{ __('auth.register_header_text') }}</h2>
                            <p class="mt-2 text-sm text-gray-500">
                                {{ __('auth.register_sub_header_text') }}
                                <span class="text-sky-600 hover:underline ml-1 font-medium">
                                    <a href="{{ route('login') }}"><i
                                            class="animate-bounce fa-solid fa-arrow-right mr-1"></i>{{ __('auth.login_link_text') }}</a>
                                </span>
                            </p>
                        </div>
                    </div>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mt-4 space-y-6">
                            <div>
                                <x-theme.form.input-label for="name" :value="__('auth.name_label')" />
                                <x-theme.form.text-input id="name" name="name" type="text" required
                                    autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="col-span-full">
                                <x-theme.form.input-label for="email" :value="__('auth.email_label')" />
                                <x-theme.form.text-input id="email" name="email" type="email" required />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="col-span-full">
                                <x-theme.form.input-label for="password" :value="__('auth.password_label')" />
                                <x-theme.form.text-input id="password" name="password" type="password" required />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="col-span-full">
                                <x-theme.form.input-label for="password_confirmation" :value="__('auth.password_confirmation_label')" />
                                <x-theme.form.text-input id="password_confirmation" name="password_confirmation"
                                    type="password" required />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="col-span-full">
                                <x-theme.primary-button>{{ __('auth.register_button_label') }}</x-theme.primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="hidden bg-[#f8f8ff] lg:block lg:flex-1 lg:relative sm:contents">
                <div class="absolute inset-0 object-cover w-full h-full">
                    <img class="object-center w-full h-auto" src="{{ asset('assets/images/login-illustration.png') }}">
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
