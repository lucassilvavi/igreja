<?php

namespace App\Repositories;

/**
 *
 * @author Gleuton Dutra <gleuton.dutra@gmail.com>
 *
 */
use App\Models\Cidade,
    App\Models\Estado;

class CidadeRepository extends Repository
{
    protected $model;
    protected $modelEstado;

    public function __construct(Cidade $cidade, Estado $estado)
    {
        $this->model = $cidade;
        $this->modelEstado = $estado;
    }

    public function cidades($idEstado)
    {
        
        $estado = $this->modelEstado->find($idEstado);
        
        return $estado->cidade()->get(['co_seq_cidade','no_cidade']);
    }
}