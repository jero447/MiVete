<?php

namespace App\Models;

use CodeIgniter\Model;

class RelacionAmoMascotaModel extends Model
{
    protected $table            = 'amo_mascotas';
    protected $primaryKey       = 'idAmo_Mascotas';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ["idAmo","idMascota","fechaInicio","fechaFin","motivoFin"];


    protected $validationRules = [
    'idAmo' => 'required',
    'idMascota' => 'required',
    ];
    
    protected $validationMessages = [
        'idAmo' => [
            'required' => 'Debe seleccionar un amo.',
        ],
        'idMascota' => [
            'required' => 'Debe seleccionar una mascota.',
        ],
    ];

    

    public function insertarRelacionAmoMascota($data){

        return $this->insert($data);
        
    }

    public function obtenerRelacionAmoMascota($idMascota, $idAmo){
        return $this->where(["idAmo" => $idAmo, "idMascota" => $idMascota])->first();
    }

    public function obtenerRegistrosAmoDeMascotas($idMascota){
        return $this->where(["idMascota" => $idMascota])->find();
    }

    public function obtenerRegistrosMascotasDeAmo($idAmo){
        return $this->where(["idAmo" => $idAmo])->find();
    }

    public function obtenerAmosPorMascotas($idMascota){

        $builder = $this->db->table('amo_mascotas');
        $builder->select("amos.idAmo, amos.nombre, amos.direccion, amos.telefono, amos.fechaAlta");
        $builder->join("amos", "amos.idAmo = amo_mascotas.idAmo");
        $builder->where("amo_mascotas.idMascota", $idMascota);
        $query = $builder->get();
        $results = $query->getResultArray();
        return $results;

    }

    public function obtenerMascotasPorAmos($idAmo){

        $builder = $this->db->table('amo_mascotas');
        $builder->select("mascotas.idMascotas, mascotas.nombre, mascotas.especie, mascotas.raza, mascotas.nroRegistro, mascotas.edad, mascotas.amoActual ,mascotas.fechaAlta");
        $builder->join("mascotas", "mascotas.idMascotas = amo_mascotas.idMascota");
        $builder->where("amo_mascotas.idAmo", $idAmo);
        $query = $builder->get();
        $results = $query->getResultArray();
        return $results;

    }


    public function actualizarRelacionAmoMascota($id, $data){

        return $this->update($id,$data);

    }



    public function eliminarRelacionAmoMascota($data){
        return $this->where(["idMascota" => $data["idMascota"], "idAmo" => $data["idAmo"]])->delete();
    }


}
