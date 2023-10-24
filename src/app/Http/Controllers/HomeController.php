<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
      //Para definir un metodo seria:
      public function __invoke(){
        //Aca estamos llamando a la vista
        return view('home');
    }
}
