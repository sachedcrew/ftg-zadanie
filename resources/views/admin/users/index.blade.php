@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-semibold mb-4">Panel admina - Lista użytkowników</h1>
    
    <a href="{{ route('admin.users.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full mb-4 inline-block">Dodaj nowego użytkownika</a>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($users as $user)
            <div class="max-w-sm rounded-lg overflow-hidden shadow-md">
                <div class="px-6 py-4">
                    <h3 class="text-xl font-semibold mb-2">{{ $user->name }}</h3>
                    <p class="text-gray-600 text-base">{{ $user->email }}</p>
                    <p class="text-gray-600 text-base"><strong>Rola:</strong> {{ $user->role }}</p>
                </div>
                <div class="px-6 py-4">
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full inline-block mr-2">Edytuj</a>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-full inline-block">Usuń</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    {{ $users->links() }} 
</div>
@endsection
