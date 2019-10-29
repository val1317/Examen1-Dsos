<?php

namespace App\Models\Materia;

use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
  protected $table = 'materia';
  protected $primarykey = 'id_materia';
  public $timestamps = false;

  protected $fillable = [
    'id_materia','nombre_materia','titular'
    ,'total_alumnos'
  ];
}

 ?>
