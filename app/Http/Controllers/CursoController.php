<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    //

    public function index(){
        
        $cursos =  Curso::orderBy('id', 'desc')->get();
       
       return view('cursos.listarcurso', compact('cursos'));
  
    }


    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
        
        $curso=new Curso();
         $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        //ADJUNTAR EL PDF
        $file=$request->file("urlPdf");
        $nombreArchivo = "pdf_".time().".".$file->guessExtension();
        $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
        $curso->urlPdf = $nombreArchivo;
        $curso->save();
       
        return redirect()->route('cursos.index');
       // return view('cursos.show',compact('curso'));
     
      }


      public function show(Curso $curso){
        //$temp=Curso::find($curso);
       return view('cursos.show',compact('curso'));
     }

     public function destroy (Curso $curso){
      $curso->delete();
      return redirect()->route('cursos.index');
       
     }




}
