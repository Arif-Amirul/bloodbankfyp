@section('title', 'Reset password')

<div class="z-50 mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
        <div class="pb-6 sm:mx-auto sm:w-full sm:max-w-md">
            <a href="{{ route('home') }}">
                <x-logo class="w-auto h-16 mx-auto text-primary-600" />
            </a>

            <h2 class="mt-6 text-2xl font-extrabold leading-9 text-center text-gray-900">
                Reset Password
            </h2>
        </div>
        @if ($emailSentMessage)
        <div class="p-4 rounded-md bg-green-50">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <div class="ml-3">
                    <p class="text-sm font-medium leading-5 text-green-800">
                        {{ $emailSentMessage }}
                    </p>
                </div>
            </div>
        </div>
        @else
        <form wire:submit.prevent="sendResetPasswordLink" class="w-80">
            <div>
                <x-input label="Email address" wire:model.lazy="email" id="email" name="email" type="email" required
                    autofocus placeholder="Email" />
            </div>

            <div class="mt-8">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit"
                        class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out border border-transparent rounded-md bg-primary-600 hover:bg-primary-500 focus:outline-none focus:border-primary-700 focus:ring-primary active:bg-primary-700">
                        Send password reset link
                    </button>
                </span>
            </div>
        </form>
        @endif
    </div>
</div>
