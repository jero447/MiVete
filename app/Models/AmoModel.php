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

}
