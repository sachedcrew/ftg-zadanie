@extends('layouts.app') {{-- Załóżmy, że używasz domyślnego layoutu --}}

@section('content')
<div class="container mx-auto mt-3">
    <div class="flex justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="bg-gray-900 text-white p-4 text-center rounded-t-lg">
                    <h2 class="text-2xl font-semibold">{{ __('Rejestracja') }}</h2>
                </div>

                <div class="p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">{{ __('Imię') }}</label>
                            <input id="name" type="text" class="form-input mt-1 block w-full @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">{{ __('Adres email') }}</label>
                            <input id="email" type="email" class="form-input mt-1 block w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-gray-700">{{ __('Hasło') }}</label>
                            <input id="password" type="password" class="form-input mt-1 block w-full @error('password') border-red-500 @enderror" name="password" required>
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                {{ __('Zarejestruj się') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
