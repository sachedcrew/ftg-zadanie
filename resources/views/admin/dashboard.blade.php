@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Panel admina - Lista użytkowników</h1>
        
        <a href="{{ route('administrator.users.create') }}" class="btn btn-primary mb-2">Dodaj nowego użytkownika</a>

        @foreach ($users as $user)
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">{{ $user->name }}</h2>
                    <p class="card-text">{{ $user->email }}</p>
                    <p class="card-text"><strong>Rola:</strong> {{ $user->role }}</p>
                    <a href="{{ route('administrator.users.edit', $user->id) }}" class="btn btn-primary">Edytuj</a>
                    <form action="{{ route('administrator.users.destroy', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
                </div>
            </div>
        @endforeach

        {{ $users->links() }}
    </div>
@endsection
