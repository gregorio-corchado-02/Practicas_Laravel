<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validadorFormDiario;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        return view('formulario');
        
    }

    public function metodoRecuerdos(){
        return view('recuerdos');
    }

    public function metodoGuardar(validadorFormDiario $req){
        
       /* $validated = $req->validate([
            'txtTitulo' => 'required|max:10',
            'txtRecuerdos' => 'required|min:5',
        ]);*/
     
        // The blog post is valid...
     
        return redirect('/formulario')->with('confirmacion','Tu recuerdo llego al controlador');

        
        /*echo '<p>';
            echo return $req->path();
            echo '-';
            echo return $req->method();
            echo '-';
            echo return $req->ip();
            echo '-';
            echo return $req->url();
        echo '</p>';*/
    }

    //
}
