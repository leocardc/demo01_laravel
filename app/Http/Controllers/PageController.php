<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class PageController extends Controller
{
    //
    public function inicio(){
        $notas = Nota::paginate(2);

        return view('welcome',compact('notas'));
    }

    public function detalle($id){
        $notas=Nota::findOrFail($id);
        return view('notas.detalle',compact('notas'));
    }


    public function fotos(){
        return view('fotos');
    }


    public function nosotros($nombre = null ) {
        $equipo=['Leo','Jose','Luciana'];
        // return view('nosotros',['equipo'=>$equipo]);
        return view('nosotros',compact('equipo','nombre'));
    }


    public function blog () {
        return view('blog');
    }


    public function crear(Request $request){
        // return $request->all();

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
        $notaNueva = new Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;

        $notaNueva->save();
        return back()->with('mensaje','Nota agregada!');
    }

    public function editar($id){
        $notas=Nota::findOrFail($id);
        return view('notas.editar',compact('notas'));
    }


    public function update(Request $request,$id){
        $notaUpdate=Nota::findOrFail($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;
        
        $notaUpdate->save();
        return back()->with('mensaje','Nota actualizada!');
    }

    public function eliminar($id){

        $notaEliminar = Nota::findOrFail($id);
        $notaEliminar->delete();
    
        return back()->with('mensaje', 'Nota Eliminada');
    }
  
}
