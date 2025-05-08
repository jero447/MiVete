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
    protected $allowedFields    = ["nombre", "especie", "raza", "nroRegistro","edad","fechaAlta","fechaDefuncion"];


    public function insertarMascota($data){

        return $this->insert($data);

    }

}
