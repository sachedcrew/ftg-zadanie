<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Team Game - Zadanie</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    
    
</head>
<body>
    <header>
    <div class="bg-gray-900 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <a  href="{{ route('welcome') }}" class="text-2xl font-semibold">Football Team</a>
        <ul class="flex space-x-4">
            @guest
                <li><a href="{{ route('login') }}" class="hover:underline">Logowanie</a></li>
                <li><a href="{{ route('register') }}" class="hover:underline">Rejestracja</a></li>
                <li><a href="{{ route('password.request') }}" class="hover:underline">Reset hasła</a></li>
            @else
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>  
                <li><a href="#" class="hover:underline">Witaj, {{ Auth::user()->name }}</a></li> 
                <li><a href="{{ route('logout') }}"  class="hover:underline" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Wyloguj się</a></li>
                
                
            @endguest
        </ul>
    </div>
</div>


    </header>

    <main>
        @yield('content') 
    </main>

    <footer>
  
    </footer>
</body>
</html>
