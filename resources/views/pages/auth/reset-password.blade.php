<x-guest-layout>
    <section>
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-20 max-w-7xl">
            <div class="w-full max-w-md mx-auto md:max-w-sm md:px-0 md:w-96 sm:px-4">
                <div class="flex flex-col">
                    <div>
                        <h2 class="text-4xl text-black">{{ __('auth.reset_password_header_text') }}</h2>
                    </div>
                </div>
                <form action="{{ route('password.store') }}" method="POST">
                    @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="mt-4 space-y-6">
                        <div class="col-span-full">
                            <x-theme.form.input-label for="email" :value="__('auth.email_label')" />
                            <x-theme.form.text-input id="email" name="email" type="email"
                                value="{{ old('email', $request->email) }}" class="!rounded-full" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="col-span-full">
                            <x-theme.form.input-label for="password" :value="__('auth.password_label')" />
                            <x-theme.form.text-input id="password" name="password" type="password"
                                class="!rounded-full" placeholder="******" required />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="col-span-full">
                            <x-theme.form.input-label for="password_confirmation" :value="__('auth.password_confirmation_label')" />
                            <x-theme.form.text-input id="password_confirmation" name="password_confirmation"
                                type="password" class="!rounded-full" placeholder="******" required />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="col-span-full">
                            <x-theme.primary-button>{{ __('auth.reset_password_button_label') }}
                            </x-theme.primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>
