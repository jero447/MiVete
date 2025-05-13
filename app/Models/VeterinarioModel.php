<?php

namespace App\Models;

use CodeIgniter\Model;

class VeterinarioModel extends Model
{
    protected $table            = 'veterinario';
    protected $primaryKey       = 'idVeterinario';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ["nombre", "especialidad", "telefono", "fechaIngreso","fechaEgreso"];



    public function insertarVeterinario($data){

    return $this->insert($data);

    }

    public function obtenerVeterinarios(){
        
        return $this->findAll();

    }

     public function obtenerVeterinarioPorId($idVeterinario){
        
        return $this->where("idVeterinario", $idVeterinario)->first();

    }

    public function actualizarVeterinario($idVeterinario,$data){
        
        return $this->update($idVeterinario, $data);

    }



}
