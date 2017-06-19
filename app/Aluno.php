<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table      = 'tb_aluno';
    public $timestamps    = true;
    protected $primaryKey = 'id_aluno';
    protected $fillable   = ['nu_codigo', 'tx_nome', 'tx_endereco', 'tx_bairro', 'tx_cidade', 'tx_uf', 'nu_fone',
                             'nu_fone2', 'tx_observacao'];
    public function salvar($dados)
    {
        $dados = upperVar($dados);
        if(!empty($dados['id_aluno'])){
            return $this::where('id_aluno',$dados['id_aluno'])->update($dados);
        }
        return $this::create($dados);
    }
}
