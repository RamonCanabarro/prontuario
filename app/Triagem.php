<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Triagem extends Model
{
    protected $table =  'teste';
    public $timestamps = true;
    protected $primaryKey = 'idteste';
    protected $fillable = ['nome', 'telefone'];

    public function salvar($dados)
    {
        $dados = upperVar($dados);
        if(!empty($dados['idteste'])){
            return $this::where('idteste', $dados['idteste'])->update($dados);
        }
        return $this::created($dados);
    }
}
