<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view("layouts/head");
        echo view("home");
    }
    
    public function pantallaMenuPrincipal(){
        echo view("layouts/head");
        echo view("menuPrincipal");
    }


}
