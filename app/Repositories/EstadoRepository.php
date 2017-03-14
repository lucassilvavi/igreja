<?php

namespace App\Repositories;

/**
 *
 * @author Gleuton Dutra <gleuton.dutra@gmail.com>
 *
 */
use App\Models\Estado;

class EstadoRepository extends Repository
{
    protected $model;

    public function __construct(Estado $estado)
    {
        $this->model = $estado;
    }
}