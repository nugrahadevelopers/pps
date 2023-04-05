<x-guest-layout>
    <section>
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-20 max-w-7xl">
            <div class="w-full max-w-xl p-8 mx-auto text-center">
                <div>
                    <a href="{{ route('login') }}"><i class="fa-solid fa-arrow-left"></i></a>
                </div>
                <div>
                    <h2 class="text-4xl tracking-tighter text-black">
                        {{ __('auth.forgot_password_header_text') }}
                    </h2>
                </div>
                <div class="mt-8">
                    <div class="mt-6">
                        <form action="{{ route('password.email') }}" method="POST" class="space-y-2">
                            @csrf
                            <div class="col-span-full">
                                <x-theme.form.input-label for="email" :value="__('auth.forgot_password_sub_header_text')" />
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <x-theme.form.text-input id="email" name="email" type="email"
                                    class="text-center !rounded-full" placeholder="example@mail.com" required />
                            </div>
                            <div>
                                <x-theme.primary-button>{{ __('auth.forgot_password_button_label') }}
                                </x-theme.primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
