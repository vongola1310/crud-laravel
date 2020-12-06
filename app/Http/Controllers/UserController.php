<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UserController extends Controller
//formulario del usuario
{
    public function userform(){
        return view('usuarios.userform');
    }

    //guardar usuarios
    public function save(Request $request){
        $validator =$this->validate($request,[
            'nombre'=> 'required|string|max:255',
            'email' =>'required|string|max:255|email|unique:usuarios'
            ]);
       $userdata= request()->except('_token');
       Usuario::insert($userdata);

     return back()->with('usuarioGuardado','Usuario Guardado');
        }

         //listado de usarios
     public function list(){
        $data['users'] = Usuario::paginate(10);
        
        return view('usuarios.list',$data);
    }
    //Eliminar usarios
    public function delete($id){
        Usuario::destroy($id);

        return back()->with('usuarioEliminado','Usuario eliminado');
    }
    //Formulario para editar usuarios
    public function editform($id){
        $usuario = Usuario::findOrFail($id);

        return view('usuarios.editform',compact('usuario'));
    }
    //Edicion de usuarios
    public function edit(Request $request, $id){
        $datosUsuario = request()->except((['_token', '_method']));
        Usuario::where('id','=',$id)->update($datosUsuario);
        

        return back()->with('usuarioModificado','Usuario modificado');

    }
}

