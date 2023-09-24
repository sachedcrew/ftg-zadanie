@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-md">
        <div class="text-2xl font-semibold">{{ __('Resetowanie hasła') }}</div>

        <form method="POST" action="{{ route('password.update') }}" class="mt-4">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-4">
                <label for="email" class="block text-gray-700">{{ __('Adres E-mail') }}</label>
                <input id="email" type="email" class="form-input w-full" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">{{ __('Nowe Hasło') }}</label>
                <input id="password" type="password" class="form-input w-full" name="password" required autocomplete="new-password">
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="block text-gray-700">{{ __('Potwierdź Nowe Hasło') }}</label>
                <input id="password-confirm" type="password" class="form-input w-full" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="mb-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                    {{ __('Zresetuj Hasło') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
