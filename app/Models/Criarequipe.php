<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criarequipe extends Model
{
    protected $table = 'equipe';



    protected $fillable = [
        'equipe',
        'corredor1',
        'corredor2',
        'imagem',
        'cor'
    ];
}
