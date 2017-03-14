<?php
 
namespace App\Models;
/**
 *
 * @author Gleuton Dutra <gleuton.dutra@gmail.com>
 *
 */
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    /**
     * timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
    /**
     * Nome da conexão
     * @var string
     */
    protected $connection = 'oracle2';
    /**
     * Nome da tabela
     * @var string
     */
    protected $table = 'tb_cidade';
    /**
    * Campo da chave primaria
    *
    * @var stringprotected
    */
    protected $primaryKey = 'CO_SEQ_CIDADE';
    /**
    * Campos de data
    *
    * @var array
    */
    protected $dates = [];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function estado()
    {
        return $this->belongsTo('App\Models\Estado','id_uf','id_uf');
    }
}