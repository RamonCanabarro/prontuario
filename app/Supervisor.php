<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $table = 'tb_supervisor';
    public $timestamps = true;
    protected $primaryKey = 'id_supervisor';
    protected $fillable = ['nu_codigo', 'tx_nome', 'nu_cress', 'nu_cep', 'tx_endereco', 'tx_bairro', 'nu_numero',
        'tx_cidade', 'tx_uf', 'nu_fone', 'nu_fone2', 'tx_observacao'];

    public function salvar($dados)
    {
        $dados = upperVar($dados);
        if (!empty($dados['id_supervisor'])) {
            return $this::where('id_supervisor', $dados['id_supervisor'])->update($dados);
        }
        return $this::create($dados);
    }
}
