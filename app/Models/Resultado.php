<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    protected $table = 'resultado';



    protected $fillable = [
        'premio',
        'ganhador',
        'equipe',
        'tempo',
        'voltas',
        'data',
        'imagem'
    ];
  
        
}