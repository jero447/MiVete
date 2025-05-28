<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AmoModel;
use App\Models\MascotaModel;
use App\Models\RelacionAmoMascotaModel;
use App\Models\VeterinarioModel;

class Mostrar extends BaseController
{

    protected $modelAmo;
    protected $modelMascota;
    protected $modelParAmoMascota;
    protected $modelVeterinario;

    public function __construct() {
        $this->modelAmo = new AmoModel();
        $this->modelMascota = new MascotaModel();
        $this->modelParAmoMascota = new RelacionAmoMascotaModel();
        $this->modelVeterinario = new VeterinarioModel();
    }


    public function pantallaMostrar(){
        echo view("layouts/head");
        echo view("mostrar/eleccionMostrar");
    }

    public function pantallaAmoDeUnaMascota(){
        echo view("layouts/head");
        echo view("mostrar/amosDeUnaMascotaMostrar", ["mascotas" => $this->modelMascota->obtenerMascotas(), "amosEncontrados" => [], "idMascotaSeleccionada" => null]);
    }

    public function pantallaMascotasDeUnAmo(){
        echo view("layouts/head");
        echo view("mostrar/mascotasDeUnAmoMostrar", ["amos" => $this->modelAmo->obtenerAmos(), "mascotasEncotradas" => [], "idAmoSeleccionado" => null]);
    }


    public function buscarMascota(){

        $idMascotaSeleccionada = $this->request->getPost("mascotas");
        $amosEncontrados = $this->modelParAmoMascota->obtenerAmosPorMascotas($idMascotaSeleccionada);

        echo view("layouts/head");
        echo view("mostrar/amosDeUnaMascotaMostrar", ["mascotas" => $this->modelMascota->obtenerMascotas() ,"idMascotaSeleccionada" => $idMascotaSeleccionada, 
                                            "amosEncontrados" => $amosEncontrados,"registrosRelacion" => $this->modelParAmoMascota->obtenerRegistrosAmoDeMascotas($idMascotaSeleccionada)]);
    }


    public function buscarAmo(){

        $idAmoSeleccionado = $this->request->getPost("amos");
        $mascotasEncontradas = $this->modelParAmoMascota->obtenerMascotasPorAmos($idAmoSeleccionado);

        echo view("layouts/head");
        echo view("mostrar/mascotasDeUnAmoMostrar", ["amos" => $this->modelAmo->obtenerAmos(), "idAmoSeleccionado" => $idAmoSeleccionado,
                                         "mascotasEncotradas" => $mascotasEncontradas, "registroRelacionAmo" =>$this->modelParAmoMascota->obtenerRegistrosMascotasDeAmo($idAmoSeleccionado) ]);

    }

    public function mostrarAmos(){
        echo view("layouts/head");
        echo view("mostrar/amosMostrar", ["amos" => $this->modelAmo->obtenerAmos()]);
    }

    public function mostrarMascotas(){
        echo view("layouts/head");
        echo view("mostrar/mascotasMostrar", ["mascotas" => $this->modelMascota->obtenerMascotas()]);
    }

    public function mostrarVeterinarios(){
        echo view("layouts/head");
        echo view("mostrar/veterinariosMostrar", ["veterinarios" => $this->modelVeterinario->obtenerVeterinarios()]);
    }

}
