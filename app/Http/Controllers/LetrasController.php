<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LetrasController extends Controller
{
    public function criarLetra(){
        return response('aaa', config('constants.HTTP.CREATED'));
    }
    
    public function obterLetra(){
        $letraDeMusica = "";
        return response($letraDeMusica, config('constants.HTTP.OK'));
    }
}
