<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AmoModel;
use App\Models\MascotaModel;
use App\Models\VeterinarioModel;

class Modificar extends BaseController
{
   
    protected $modelAmo;
    protected $modelMascota;
    protected $modelVeterinario;

    public function __construct() {
        $this->modelAmo = new AmoModel();
        $this->modelMascota = new MascotaModel();
        $this->modelVeterinario = new VeterinarioModel();
    }


    public function pantallaEleccionModificar(){

        echo view("layouts/head");
        echo view("modificar/eleccionModificar");

    }

    public function pantallaSeleccionVeterinarioModificar(){

        echo view("layouts/head");
        echo view("modificar/eleccionVeterinariosModificar", ["veterinarios" => $this->modelVeterinario->obtenerVeterinarios()]);
        
    }


    public function pantallaModificarVeterinario(){

        $veterinarioModificar = $this->modelVeterinario->obtenerVeterinarioPorId($this->request->getPost("veterinarioModificar"));

        echo view("layouts/head");
        echo view("modificar/veterinarioModificar", ["veterinarioModificar" => $veterinarioModificar]);

    }

    public function modificarVeterinario(){

        $idVeterinarioModificar = $this->request->getPost("idVeterinario");

        $data = [
            "nombre" => $this->request->getPost("nombre"),
            "especialidad" => $this->request->getPost("especialidad"),
            "telefono" => $this->request->getPost("telefono")
        ];


        if (!$this->modelVeterinario->validate($data)) {
            return view("layouts/head")
                . view("modificar/veterinarioModificar",[
                    "errors" => $this->modelVeterinario->errors(),
                    "datos" => $data,
                ]);
        }


        $this->modelVeterinario->actualizarVeterinario($idVeterinarioModificar, $data);
        return redirect()->to("/");
    }


    public function pantallaSeleccionAmoModificar(){

        echo view("layouts/head");
        echo view("modificar/eleccionAmoModificar", ["amos" => $this->modelAmo->obtenerAmos()]);

    }

    public function pantallaModificarAmo(){

        $amoModificar = $this->modelAmo->obtenerAmosPorId($this->request->getPost("amoModificar"));
        

        echo view("layouts/head");
        echo view("modificar/amoModificar", ["amoModificar" => $amoModificar]);

    }

    public function modificarAmo(){

        $idAmoModificar = $this->request->getPost("idAmo");

        $data = [
            "nombre" => $this->request->getPost("nombre"),
            "direccion" => $this->request->getPost("direccion"),
            "telefono" => $this->request->getPost("telefono")
        ];


        if (!$this->modelAmo->validate($data)) {
            return view("layouts/head")
                . view("modificar/amoModificar", [
                    "errors" => $this->modelAmo->errors(),
                    "datos" => $data,
                    "amos" => $this->modelAmo->obtenerAmos(), 
                    "mascotas" => $this->modelMascota->obtenerMascotas() 
                ]);
        }


        $this->modelAmo->actualizarAmo($idAmoModificar, $data);
        return redirect()->to("/");

    }


    public function pantallaSeleccionMascotaModificar(){

        echo view("layouts/head");
        echo view("modificar/eleccionMascotasModificar", ["mascotas" => $this->modelMascota->obtenerMascotas()]);

    }

    public function pantallaModificarMascota(){

        $mascotaModificar = $this->modelMascota->obtenerMascotaPorId($this->request->getPost("mascotaModificar"));

        echo view("layouts/head");
        echo view("modificar/mascotaModificar", ["mascotaModificar" => $mascotaModificar]);

    }

    public function modificarMascota(){

        $idMascotaModificar = $this->request->getPost("idMascotas");

        $data = [
            "nombre" => $this->request->getPost("nombre"),
            "especie" => $this->request->getPost("especie"),
            "raza" => $this->request->getPost("raza"),
            "nroRegistro" => $this->request->getPost("nro_registro"),
            "edad" => $this->request->getPost("edad")
        ];


        if (!$this->modelMascota->validate($data)) {
            return view("layouts/head")
                . view("modificar/mascotaModificar", [
                    "errors" => $this->modelMascota->errors(),
                    "datos" => $data,
                ]);
        }


        $this->modelMascota->actualizarMascota($idMascotaModificar, $data);
        return redirect()->to("/");
    }





}
