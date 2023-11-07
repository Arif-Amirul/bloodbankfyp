@section('title', 'Reset password')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-primary-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold leading-9 text-center text-gray-900">
            Reset password
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="resetPassword">
                <input wire:model="token" type="hidden">

                <div>
                    <x-input
                        wire:model.lazy="email"
                        id="email"
                        name="email"
                        type="email"
                        icon="user"
                        placeholder="Email"
                    />
                </div>

                <div class="mt-6">
                    <x-inputs.password
                        wire:model.lazy="password"
                        id="password"
                        type="password"
                        placeholder="Password"
                    />
                </div>

                <div class="mt-6">
                    <x-inputs.password
                        label="Confirm Password"
                        wire:model.lazy="passwordConfirmation"
                        id="password_confirmation"
                        type="password"
                        required
                    />
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out border border-transparent rounded-md bg-primary-600 hover:bg-primary-500 focus:outline-none focus:border-primary-700 focus:ring-primary active:bg-primary-700">
                            Reset password
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
