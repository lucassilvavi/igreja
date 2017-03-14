<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MembroRequest extends Request {

    public function authorize() {
        return true;
    }

    public function all() {
        $data = parent::all();
        $data['cpf'] = preg_replace('/[^0-9]/i', '', $data['cpf']);
        $data['telefone'] = preg_replace('/[^0-9]/i', '', $data['telefone']);
        $data['celular'] = preg_replace('/[^0-9]/i', '', $data['celular']);
        return $data;
    }

    public function rules() {
        return [
            'nome' => 'required',
            'telefone' => 'regex:/^\+?[^a-zA-Z]{5,}$/',
            'cpf' => '',
            'celular' => 'regex:/^\+?[^a-zA-Z]{5,}$/',
            'endereco' => '',
            'profissao' => '',
            'no_pai' => '',
            'no_mae' => '',
            'estado_civil' => '',
            'dt_nascimento' => 'required',
            'dt_batizado' => 'required',
            'ad_ipbs' => 'required',
            'naturalizadade' => '',
            'ds_email' => '',
            'igreja_batismo' => 'required'
        ];
    }

}
