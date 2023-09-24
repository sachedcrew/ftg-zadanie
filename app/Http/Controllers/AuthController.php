<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use App\Events\UserRegistered;
use App\Jobs\SendUserRegistrationEmail;


class AuthController extends Controller
{
    public function register(RegistrationRequest $request)
    {
        
        // Utworzenie nowego użytkownika
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), 
            'role' => 'user', 
        ]);

        $user->save();

        event(new UserRegistered($user));
        SendUserRegistrationEmail::dispatch($user)->onQueue('emails');

        return redirect()->route('welcome');
    }

    public function login(LoginRequest $request)
{
    

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->role === $request->input('role')) {
        
            if ($user->role === 'user') {
                return redirect()->route('welcome'); 
            } elseif ($user->role === 'Redaktor') {
                return redirect()->route('redaktor.posts.index'); 
            } elseif ($user->role === 'Admin') {
                return redirect()->route('admin.users.index'); 
            }
        } else {
        
            Auth::logout(); 
            return back()->withErrors(['role' => 'Nieprawidłowa rola'])->withInput(); 
        }
    } else {
        
        return back()->withErrors(['email' => 'Błąd logowania'])->withInput(); 
    }
}

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showRegistrationForm()
    {
    return view('auth.register'); 
    }

    public function showLoginForm()
    {
    return view('auth.login');
    }
}
