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

    protected $skipValidation = false;

    protected $validationRules = [
        "nombre" => "required|regex_match[/^[A-Za-zÀ-ÿ\s\.,\'-]+$/]|min_length[3]|max_length[50]",
        "direccion" => "required|min_length[5]|max_length[100]",
        "telefono" => "required|numeric|min_length[6]|max_length[15]"
    ];

    protected $validationMessages = [
        "nombre" => [
            "required" => "El nombre es obligatorio.",
            "regex_match" => "El nombre solo puede contener letras, espacios y signos como puntos o comas.",
            "min_length" => "El nombre debe tener al menos 3 caracteres.",
            "max_length" => "El nombre no debe superar los 50 caracteres."
        ],
        "direccion" => [
            "required" => "La dirección es obligatoria.",
            "min_length" => "La dirección debe tener al menos 5 caracteres.",
            "max_length" => "La dirección no debe superar los 100 caracteres."
        ],
        "telefono" => [
            "required" => "El teléfono es obligatorio.",
            "numeric" => "El teléfono solo puede contener números.",
            "min_length" => "El teléfono debe tener al menos 6 dígitos.",
            "max_length" => "El teléfono no debe superar los 15 dígitos."
        ]
    ];


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
