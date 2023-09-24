@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-3">
    <div class="flex justify-center">
        <div class="w-full md:w-1/2 lg:w-1/3">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="bg-gray-900 text-white p-4 text-center rounded-t-lg">
                    <h2 class="text-2xl font-semibold">{{ __('Logowanie') }}</h2>
                </div>

                <div class="p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">{{ __('Adres email') }}</label>
                            <input id="email" type="email" class="form-input mt-1 block w-full" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-gray-700">{{ __('Hasło') }}</label>
                            <input id="password" type="password" class="form-input mt-1 block w-full" name="password" required autocomplete="current-password">

                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="role" class="block text-gray-700">{{ __('Rola') }}</label>
                            <select id="role" class="form-select mt-1 block w-full" name="role">
                                <option value="Redaktor">Redaktor</option>
                                <option value="Admin">Administrator</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <div class="flex items-center">
                                <input class="form-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="ml-2 text-gray-700" for="remember">
                                    {{ __('Zapamiętaj mnie') }}
                                </label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                {{ __('Zaloguj') }}
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-center">
                                <a class="text-blue-500 hover:underline" href="{{ route('password.request') }}">
                                    {{ __('Zapomniałeś hasła?') }}
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
