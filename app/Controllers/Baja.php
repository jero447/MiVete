<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RelacionAmoMascotaModel;
use App\Models\MascotaModel;
use App\Models\VeterinarioModel;
use App\Models\AmoModel;

class Baja extends BaseController
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

    public function seleccionBaja(){
        echo view("layouts/head");
        echo view("baja/eleccionDarBaja");
    }

    public function pantallaParAmoMascotaBaja(){
        echo view("layouts/head");
        echo view("baja/relacionAmoMascotaBaja", [ "amos" => $this->modelAmo->obtenerAmos(), "mascotas" => $this->modelMascota->obtenerMascotas() ]);
    }

    public function obtenerAmoActualDeMascota($idMascota){
        $mascota = $this->modelMascota->obtenerMascotaPorId($idMascota);
        $amoActual = $this->modelAmo->obtenerAmosPorId($mascota["amoActual"]);

        return $this->response->setJSON($amoActual);
    }

    public function eliminarParAmoMascota(){

        $data = [
            "idMascota" => $this->request->getPost("mascotas"),
            "idAmo" => $this->request->getPost("amos"),
            "motivo" => $this->request->getPost("motivo")
        ];

        $mascotaAcutualizar =  $this->modelParAmoMascota->obtenerRelacionAmoMascota($data["idMascota"],$data["idAmo"]);

        if($data["motivo"] === "fallecimiento"){

            $this->modelMascota->actualizarMascota($data["idMascota"],["amoActual" => null ,"fechaDefuncion" => date('Y-m-d')]);

            $mascotaAcutualizar =  $this->modelParAmoMascota->obtenerRelacionAmoMascota($data["idMascota"],$data["idAmo"]);

            $this->modelParAmoMascota->actualizarRelacionAmoMascota($mascotaAcutualizar, ["motivoFin" => $data["motivo"], "fechaFin" => date('Y-m-d')]);

            return redirect()->to("/");

        }else{

            $this->modelMascota->actualizarMascota($data["idMascota"],["amoActual" => null]);
            $this->modelParAmoMascota->actualizarRelacionAmoMascota($mascotaAcutualizar, ["motivoFin" => $data["motivo"], "fechaFin" => date('Y-m-d')]);
            return redirect()->to("/");
        }
        
    }

    public function pantallaVeterinarioBaja(){

        echo view("layouts/head");
        echo view("baja/veterinariosBaja", ["veterinarios" => $this->modelVeterinario->obtenerVeterinarios()]);

    }

    public function darDeBajaVeterinario(){

        $idVeterinario = $this->request->getPost("veterinario");

        $this->modelVeterinario->actualizarVeterinario($idVeterinario,["fechaEgreso" => date("Y-m-d")]);

        return redirect()->to("/");
    }


}
