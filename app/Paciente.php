<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table =  'tb_aluno';
    public $timestamps = true;
    protected $primaryKey = 'id_aluno';
    protected $fillable = ['id_aluno','tx_nome', 'nu_fone'];
}
