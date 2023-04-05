<x-guest-layout>
    {{-- <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Log Out') }}
            </button>
        </form>
    </div> --}}

    <section>
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-20 max-w-7xl">
            <div class="w-full max-w-xl p-8 mx-auto text-center">
                <div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"><i class="fa-solid fa-arrow-left"></i></button>
                    </form>
                </div>
                <div>
                    <h2 class="text-4xl tracking-tighter text-black">
                        {{ __('auth.verify_email_header_text') }}
                    </h2>
                    <p class="mt-2 text-sm text-gray-500">
                        {{ __('auth.verify_email_sub_header_text') }}
                    </p>
                </div>
                @if (session('status') == 'verification-link-sent')
                    <div class="mt-2 mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ __('auth.verification_link_sent_text') }}
                    </div>
                @endif
                <div class="mt-8">
                    <div class="mt-6">
                        <form action="{{ route('verification.send') }}" method="POST" class="space-y-2">
                            @csrf

                            <div>
                                <x-theme.primary-button>{{ __('auth.verify_email_button_label') }}
                                </x-theme.primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
