@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-md">
        <div class="text-2xl font-semibold">{{ __('Resetowanie hasła') }}</div>

        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="mt-4">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700">{{ __('Adres E-mail') }}</label>
                <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                    {{ __('Wyślij Link Resetowania Hasła') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
