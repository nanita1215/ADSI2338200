@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Register') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="fullname" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('FullName') }} @lang('general.label-fullname'):
                        </label>

                        <input id="fullname" type="text" class="form-input w-full @error('fullname')  border-red-500 @enderror"
                            name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                        @error('fullname')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Phone') }}:
                        </label>

                        <input id="phone" type="number"
                            class="form-input w-full @error('phone') border-red-500 @enderror" name="phone"
                            value="{{ old('phone') }}" required>

                        @error('phone')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="birthdate" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Birthdate') }}:
                        </label>

                        <input id="birthdate" type="date"
                            class="form-input w-full @error('birthdate') border-red-500 @enderror" name="birthdate"
                            value="{{ old('birthdate') }}" required>

                        @error('birthdate')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('gender') }}:
                        </label>

                        <select name="gender" id="gender" class="form-select w-full @error('password') border-red-500 @enderror">
                            <option value="" disabled>Select Gender ...</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>

                        @error('gender')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Address') }}:
                        </label>

                        <input id="address" type="text"
                            class="form-input w-full @error('address') border-red-500 @enderror" name="address"
                            value="{{ old('address') }}" required>

                        @error('address')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password" class="form-input w-full"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('Register') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __('Already have an account?') }}
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection