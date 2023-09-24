@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-semibold mb-4">Dodaj nowego użytkownika</h1>
    
    <form method="POST" action="{{ route('admin.users.store') }}" class="max-w-md">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Imię:</label>
            <input type="text" name="name" id="name" class="w-full bg-gray-100 border border-gray-300 rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email:</label>
            <input type="email" name="email" id="email" class="w-full bg-gray-100 border border-gray-300 rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Hasło:</label>
            <input type="password" name="password" id="password" class="w-full bg-gray-100 border border-gray-300 rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="role" class="block text-gray-600 text-sm font-medium mb-2">Rola:</label>
            <select name="role" id="role" class="w-full bg-gray-100 border border-gray-300 rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required>
                <option value="user">Użytkownik</option>
                <option value="Redaktor">Redaktor</option>
                <option value="Admin">Admin</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full">Dodaj użytkownika</button>
    </form>
</div>
@endsection
