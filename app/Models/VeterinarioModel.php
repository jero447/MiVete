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
    protected $allowedFields    = ["nombre", "especialidad", "telefono", "fechaEgreso"];



public function insertarVeterinario($data){

   return $this->insert($data);

}



}
