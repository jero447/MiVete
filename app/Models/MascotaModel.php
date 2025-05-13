<?php

namespace App\Models;

use CodeIgniter\Model;

class MascotaModel extends Model
{
    protected $table            = 'mascotas';
    protected $primaryKey       = 'idMascotas';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ["nombre", "especie", "raza", "nroRegistro","edad", "amoActual","fechaAlta","fechaDefuncion"];


    public function insertarMascota($data){

        return $this->insert($data);

    }

     public function obtenerMascotas(){
        
        return $this->findAll();

    }

    public function obtenerMascotaPorId($idMascota){
        return $this->where("idMascotas", $idMascota)->first();
    }

    public function actualizarMascota($idMascota, $data){
        return $this->update($idMascota,$data);
    }

}
