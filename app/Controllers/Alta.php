<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AmoModel;
use App\Models\MascotaModel;
use App\Models\VeterinarioModel;
use App\Models\RelacionAmoMascotaModel;

class Alta extends BaseController
{

    protected $modelAmo;
    protected $modelMascota;
    protected $modelVeterinario;
    protected $modelParAmoMascota;


    public function __construct() {
        $this->modelAmo = new AmoModel();
        $this->modelMascota = new MascotaModel();
        $this->modelVeterinario = new VeterinarioModel();
        $this->modelParAmoMascota = new RelacionAmoMascotaModel();
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

    public function pantallaParAmoMascotaAlta(){
        echo view("layouts/head");
        echo view("alta/relacionAmoMascotaAlta", [ "amos" => $this->modelAmo->obtenerAmos(), "mascotas" => $this->modelMascota->obtenerMascotas() ]);
    }


    public function insertarAmo(){
        
        $data = [
            "nombre" => $this->request->getPost("nombre"),
            "apellido" => $this->request->getPost("apellido"),
            "direccion" => $this->request->getPost("direccion"),
            "telefono" => $this->request->getPost("telefono"),
        ];

        if (!$this->modelAmo->validate($data)){
                
            return view("layouts/head")
            . view("alta/amoAlta", [
                "errors" => $this->modelAmo->errors(),
                "datos" => $data
            ]);
        }

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
        ];

        if (!$this->modelMascota->validate($data)){
                
            return view("layouts/head")
            . view("alta/mascotaAlta", [
                "errors" => $this->modelMascota->errors(),
                "datos" => $data
            ]);
        }

        $this->modelMascota->insertarMascota($data);
        return redirect()->to("/");

    }


    public function insertarVeterinario(){
        $data = [
            "nombre" => $this->request->getPost("nombre"),
            "especialidad" => $this->request->getPost("especialidad"),
            "telefono" => $this->request->getPost("telefono")
        ];


        if (!$this->modelVeterinario->validate($data)) {
            return view("layouts/head")
                . view("alta/veterinarioAlta", [
                    "errors" => $this->modelVeterinario->errors(),
                    "datos" => $data
                ]);
        }

        $this->modelVeterinario->insertarVeterinario($data);
        return redirect()->to("/");

    }
    
    public function insertarParAmoMascota(){
        $data = [
            "idAmo" => $this->request->getPost("amos"),
            "idMascota" => $this->request->getPost("mascotas")
        ];
        
        $amoActual = [
            "amoActual" => $data["idAmo"]
        ];

        
        if (!$this->modelParAmoMascota->validate($data)) {
            return view("layouts/head")
                . view("alta/relacionAmoMascotaAlta", [
                    "errors" => $this->modelParAmoMascota->errors(),
                    "datos" => $data,
                    "amos" => $this->modelAmo->obtenerAmos(), 
                    "mascotas" => $this->modelMascota->obtenerMascotas() 
                ]);
        }


        $this->modelParAmoMascota->insertarRelacionAmoMascota($data);
        $this->modelMascota->actualizarMascota($data["idMascota"], $amoActual);
        return redirect()->to("/");

    }


    


}
