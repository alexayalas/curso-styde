<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($name,$nickname = null)
    {
        $name = ucfirst($name);

        if($nickname){
            return "saludo de parte de {$name} y tu apodo es {$nickname}";
        }else{
            return "saludo de parte de {$name} y no tienes apodo";
        }        
    }
}
