<?php

namespace App\Models;

use CodeIgniter\Model;

class AmoModel extends Model
{
    protected $table            = 'amos';
    protected $primaryKey       = 'idAmo';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ["nombre", "direccion", "telefono", "fechaAlta"];


    public function insertarAmo($data){

        return $this->insert($data);

    }

    public function obtenerAmosPorId($idAmo){

        return $this->where("idAmo", $idAmo)->first();

    }

    public function obtenerAmos(){
        
        return $this->findAll();

    }

    public function actualizarAmo($idAmo, $data){
        return $this->update($idAmo,$data);
    }

    

}
