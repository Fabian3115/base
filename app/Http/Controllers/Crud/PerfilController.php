<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index(){
        return view('Interfaz.Perfil.perfil');
    }
    public function edit(Request $request){
        
    }
}
