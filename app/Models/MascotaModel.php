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


    protected $validationRules = [
        "nombre" => "required|alpha_space|min_length[2]|max_length[50]",
        "especie" => "required|alpha_space|min_length[3]|max_length[30]",
        "raza" => "required|alpha_space|min_length[3]|max_length[50]",
        "nroRegistro" => 'required|integer|min_length[4]|max_length[4]',
        "edad" => "required|numeric|greater_than_equal_to[0]|less_than[100]"
    ];

    
       protected $validationMessages = [
            "nombre" => [
                "required" => "El nombre es obligatorio.",
                "alpha_space" => "El nombre solo puede contener letras y espacios.",
                "min_length" => "El nombre debe tener al menos 2 caracteres.",
                "max_length" => "El nombre no debe superar los 50 caracteres."
            ],
            "especie" => [
                "required" => "La especie es obligatoria.",
                "alpha_space" => "La especie solo puede contener letras y espacios.",
                "min_length" => "La especie debe tener al menos 3 caracteres.",
                "max_length" => "La especie no debe superar los 30 caracteres."
            ],
            "raza" => [
                "required" => "La raza es obligatoria.",
                "alpha_space" => "La raza solo puede contener letras y espacios.",
                "min_length" => "La raza debe tener al menos 3 caracteres.",
                "max_length" => "La raza no debe superar los 50 caracteres."
            ],
            "nroRegistro" => [
                "required" => "El número de registro es obligatorio.",
                "integer" => "El número de registro solo puede contener números.",
                "min_length" => "Debe tener al menos 4 caracteres.",
                "max_length" => "No debe superar los 4 caracteres."
            ],
            "edad" => [
                "required" => "La edad es obligatoria.",
                "numeric" => "La edad debe ser un número.",
                "greater_than_equal_to" => "La edad no puede ser negativa.",
                "less_than" => "La edad no puede ser mayor a 99."
            ]
        ]; 



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
