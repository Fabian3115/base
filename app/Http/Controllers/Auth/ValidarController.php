<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;    

class ValidarController extends Controller
{
    public function showLoginForm()
    {
        return view('Login.Login');
    }

    public function login(Request $request)
    {
        $credencials= $request ->validate([
            'email'=> 'required|email',
            'password'=> 'required|string',
        ]);

        if (Auth::attempt($credencials)) {
            $request->session()->regenerate();
            $user = Auth::user(); 
            
            if ($user->rol === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->rol === 'user') {
                return redirect()->route('user.dashboard');
            }
        }
        
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('inicio');
    }
}
