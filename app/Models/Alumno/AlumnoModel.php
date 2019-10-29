<?php

namespace App\Models\Alumno;

use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
  protected $table = 'alumno';
  protected $primarykey = 'matricula';
  public $timestamps = false;

  protected $fillable = [
    'matricula','nombre_alumno','sexo'
    ,'carrera'
  ];
}

 ?>
