<x-guest-layout>
    <div class="mb-4 text-sm text-white" style="font-family: 'Krub', sans-serif;">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-danger">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex flex-col items-center justify-content-center" style="gap: 1rem;">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button style="color: #7E7E7E; width: 100%; font-family: 'Krub', sans-serif;">
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="GET" action="{{ route('dashboard') }}">
            @csrf

            <button type="submit" class="underline text-sm text-white" style="font-family: 'Krub', sans-serif;">
                {{ __('Back') }}
            </button>
        </form>
    </div>
</x-guest-layout>
