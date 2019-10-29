<?php

namespace App\Models\Boleta;

use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
  protected $table = 'boleta';
  protected $primarykey = 'id_boleta';
  public $timestamps = false;

  protected $fillable = [
    'id_boleta','matricula','id_materia'
    ,'calificacion'
  ];
}

 ?>
