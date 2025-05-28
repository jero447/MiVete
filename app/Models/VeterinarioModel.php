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


    protected $validationRules = [
        'nombre' => 'required|alpha_space|min_length[3]|max_length[50]',
        'especialidad' => 'required|alpha_space|min_length[3]|max_length[50]',
        'telefono' => 'required|numeric|min_length[6]|max_length[15]',
    ];


    protected $validationMessages = [
        'nombre' => [
            'required' => 'El nombre es obligatorio.',
            'alpha_space' => 'El nombre solo puede contener letras y espacios.',
            'min_length' => 'El nombre debe tener al menos 3 caracteres.',
            'max_length' => 'El nombre no debe superar los 50 caracteres.'
        ],
        'especialidad' => [
            'required' => 'La especialidad es obligatoria.',
            'alpha_space' => 'La especialidad solo puede contener letras y espacios.',
            'min_length' => 'La especialidad debe tener al menos 3 caracteres.',
            'max_length' => 'La especialidad no debe superar los 50 caracteres.'
        ],
        'telefono' => [
            'required' => 'El teléfono es obligatorio.',
            'numeric' => 'El teléfono solo puede contener números.',
            'min_length' => 'El teléfono debe tener al menos 6 dígitos.',
            'max_length' => 'El teléfono no debe superar los 15 dígitos.'
        ],
    ];



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
