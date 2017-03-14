<?php

namespace App\Repositories;

use App\Models\Membro;

class MembroRepository extends Repository {

    protected $model;

    public function __construct(Membro $membro) {
        $this->model = $membro;
    }

    public function getAtivo() {
        return $this->model->where('st_ativo', 'S')->get();
    }

    public function getDesativados() {
        return $this->model->where('st_ativo', 'N')->get();
    }

}
