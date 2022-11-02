<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    //
    public function index()
    {
        return $Usuario = Usuario::all();
        
    }

    public function store(Request $request)
    {
        
        $UsuarioD = Usuario::create($request->all());
        return $UsuarioD;
        
    }
}
