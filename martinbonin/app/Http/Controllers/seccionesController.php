<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seccionesController extends Controller
{
    public function inicio() {
        return view('inicio');
    }

    public function sobremi() {
        return view('sobremi');
    }

    public function entrevistas() {
        return view('entrevistas');
    }

    public function radio() {
        return view('radio');
    }

    public function proyectos() {
        return view('proyectos');
    }
    
    public function contacto() {
        return view('contacto');
    }

}
