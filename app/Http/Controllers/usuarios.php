<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use App\Http\Requests\validarform;

class usuarios extends Controller
{
    public function index(){
        $usuario = usuario::all();
        return view('usuarios.index', compact('usuario'));
    }

    public function crear(){
        return view('usuarios.crear');
    }
    public function insertar(validarform $request){
            $usuario = new Usuario();
            $usuario->Nombre = $request->Nombre;
            $usuario->Contraseña = $request->Contraseña;
            $usuario->save();
            return redirect()->route('usuarios.index');

    }


    public function edit($id){
        $usuario=Usuario::find($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(validarform $request, $id){
        $usuario=Usuario::find($id);
        $usuario->update($request->all());
        return redirect()->route('usuarios.index');
    }
    public function confirm($id){
        $usuario=DB::table('usuarios')->where('id',$id)->first();
        return view('usuario.confirmElim', compact('usuario'));
    }
    
    public function destroy($id){
        DB::table('usuarios')->where('id',$id)->delete();
        return redirect()->route('usuarios.index')->with('mensaje','Usuario borrado');
    }
        
}
