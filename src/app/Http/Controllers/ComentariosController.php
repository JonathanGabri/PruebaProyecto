<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentariosController extends Controller
{
    public function index(){
        //Aca estamos llamando a la vista
        $comentarios = Comentario::orderBy('id', 'desc')->paginate(10);

        return view('coment', compact('comentarios'));
    }
    
        //METODO PARA GUARDAR LOS DATOS EN BASE DE DATOS.
        public function GenerarComentario(Request $request){
            
            $comentario = Comentario::create($request->all());
            
            return redirect()->route('comentarios.home');
            }

            public function destroy(Comentario $comentario){
                
                $comentario->delete();
                return back()->with('success', 'comentario eliminado correctamente');
            }
            
            //FUNCION PARA EDITAR EL COMENTARIO
            public function edit(Comentario $comentario){

                return view ('edit', compact('comentario'));
            
            }

            //FUNCION PARA MOSTRAR EL DETALLE DEL COMENTARIO
            public function show($comentario){
                
                $comentario = Comentario::find($comentario);
                return view('resumenComment',compact('comentario'));
            }
        //ES UNA INSTANCIA DE LA CLASE CURSO
        //TENEMOS QUE DECLARAR UN TIPO REQUEST IGUAL QUE EN EL STORE
        
        public function update(Request $request ,Comentario $comentario){

        $comentario->name = $request->name;
        $comentario->email = $request->email;
        $comentario->motivo = $request->motivo;
        $comentario->descripcion = $request->descripcion;
        
        $comentario->save();
        return redirect()->route('comentarios.show', $comentario);
    }
}

