<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AmoModel;
use App\Models\MascotaModel;
use App\Models\VeterinarioModel;

class Alta extends BaseController
{

    protected $modelAmo;
    protected $modelMascota;
    protected $modelVeterinario;


    public function __construct() {
        $this->modelAmo = new AmoModel();
        $this->modelMascota = new MascotaModel();
        $this->modelVeterinario = new VeterinarioModel();
    }

    public function seleccionAlta(){
        echo view("layouts/head");
        echo view("alta/eleccionDarAlta");
    }

    public function pantallaAmoAlta(){
        echo view("layouts/head");
        echo view("alta/amoAlta");
    }

    public function pantallaMascotaAlta(){
        echo view("layouts/head");
        echo view("alta/mascotaAlta");
    }

    public function pantallaVeterinarioAlta(){
        echo view("layouts/head");
        echo view("alta/veterinarioAlta");
    }


    public function insertarAmo(){
        
        $data = [
            "nombre" => $this->request->getPost("nombre"),
            "apellido" => $this->request->getPost("apellido"),
            "direccion" => $this->request->getPost("direccion"),
            "telefono" => $this->request->getPost("telefono"),
            "fechaAlta" => $this->request->getPost("fecha_de_alta")
        ];

        $this->modelAmo->insertarAmo($data);
        return redirect()->to("/");

    }


    public function insertarMascota(){

        $data = [
            "nombre" => $this->request->getPost("nombre"),
            "especie" => $this->request->getPost("especie"),
            "raza" => $this->request->getPost("raza"),
            "nroRegistro" => $this->request->getPost("nro_registro"),
            "edad" => $this->request->getPost("edad"),
            "fechaAlta" => $this->request->getPost("fecha_de_alta")
        ];

        $this->modelMascota->insertarMascota($data);
        return redirect()->to("/");

    }


    public function insertarVeterinario(){
        $data = [
            "nombre" => $this->request->getPost("nombre"),
            "especialidad" => $this->request->getPost("especialidad"),
            "telefono" => $this->request->getPost("telefono"),
            "fechaIngreso" => $this->request->getPost("fecha_de_ingreso")
        ];

        $this->modelVeterinario->insertarVeterinario($data);
        return redirect()->to("/");

    }


}
