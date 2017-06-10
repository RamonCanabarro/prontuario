<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table =  'teste';
    public $timestamps = true;
    protected $primaryKey = 'idteste';
    protected $fillable = ['nome', 'telefone'];
}
