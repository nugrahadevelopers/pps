<x-guest-layout>
    <section>
        <div class="relative flex justify-center min-h-screen overflow-hidden lg:px-0 md:px-12">
            <div
                class="relative z-10 flex flex-col flex-1 px-4 py-10 bg-white shadow-sm lg:py-24 md:flex-none md:px-28 sm:justify-center">
                <div class="w-full max-w-md mx-auto md:max-w-sm md:px-0 md:w-96 sm:px-4">
                    <div class="flex flex-col">
                        <div>
                            <h2 class="text-3xl text-black">{{ __('auth.login_header_text') }}</h2>
                            <p class="mt-2 text-sm text-gray-500">
                                {{ __('auth.login_sub_header_text') }}
                                <span class="text-sky-600 hover:underline ml-1 font-medium">
                                    <a href="{{ route('register') }}"><i
                                            class="animate-bounce fa-solid fa-arrow-right mr-1"></i>{{ __('auth.register_link_text') }}</a>
                                </span>
                            </p>
                        </div>
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mt-4 space-y-6">
                            <div>
                                <x-theme.form.input-label for="email" :value="__('auth.email_label')" />
                                <x-theme.form.text-input id="email" name="email" type="email" required
                                    autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="col-span-full">
                                <x-theme.form.input-label for="password" :value="__('auth.password_label')" />
                                <x-theme.form.text-input id="password" name="password" type="password" required />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="flex items-center justify-between">
                                <x-theme.form.checkbox-input id="remember_me" name="remember" :text="__('auth.remember_me_label')" />
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"
                                        class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none">{{ __('auth.forgot_password_label') }}</a>
                                @endif
                            </div>
                            <div class="col-span-full">
                                <x-theme.primary-button>{{ __('auth.login_button_label') }}</x-theme.primary-button>
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
