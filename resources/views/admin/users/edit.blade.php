@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-semibold mb-4">Edytuj użytkownika</h1>
    
    <form method="POST" action="{{ route('admin.users.update', $user->id) }}" class="max-w-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Imię:</label>
            <input type="text" name="name" id="name" class="w-full bg-gray-100 border border-gray-300 rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" value="{{ $user->name }}" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email:</label>
            <input type="email" name="email" id="email" class="w-full bg-gray-100 border border-gray-300 rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" value="{{ $user->email }}" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Hasło (opcjonalne):</label>
            <input type="password" name="password" id="password" class="w-full bg-gray-100 border border-gray-300 rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="role" class="block text-gray-600 text-sm font-medium mb-2">Rola:</label>
            <select name="role" id="role" class="w-full bg-gray-100 border border-gray-300 rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required>
                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Użytkownik</option>
                <option value="Redaktor" {{ $user->role === 'Redaktor' ? 'selected' : '' }}>Redaktor</option>
                <option value="Admin" {{ $user->role === 'Admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full">Zapisz zmiany</button>
    </form>
</div>
@endsection
