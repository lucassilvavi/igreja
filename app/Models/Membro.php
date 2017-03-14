<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model {

    /**
     * Campo da chave primaria
     *
     * @var string
     */
    protected $primaryKey = 'id_membros';

    /**
     * timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Nome da tabela
     * @var string
     */
    protected $table = 'tb_membro';

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'cpf', 'dt_nascimento', 'dt_batizado',
        'ad_ipbs', 'naturalidade', 'estado_civil', 'endereco', 'profissao', 'no_mae', 'no_pai', 'no_conjugue', 'celular', 'telefone', 'email', 'igreja_batizado', 'st_ativo', 'cidade', 'posicao_eclesiastica'
    ];

    /**
     *
     * @var string
     */
    protected $guarded = ['id_membro'];

    /**
     * Campos de data
     *
     * @var array
     */
    protected $dates = ['dt_nascimento', 'dt_batizado'];

    /**
     * sq da tabela
     *
     * @var string
     */
    public $sequence = '';

}
