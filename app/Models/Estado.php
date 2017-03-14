<?php

namespace App\Models;
/**
 *
 * @author Gleuton Dutra <gleuton.dutra@gmail.com>
 *
 */
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
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
    protected $table = 'tb_unidade_federacao';
    /**
    * Campo da chave primaria
    *
    * @var string
    */
    protected $primaryKey = 'id_uf';
    /**
    * Campos de data
    *
    * @var array
    */
    protected $dates = [];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cidade()
    {
        return $this->hasMany('App\Models\Cidade','id_uf','id_uf');
    }
}