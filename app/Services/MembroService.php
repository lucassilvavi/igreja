<?php

namespace App\Services;

use App\Repositories\MembroRepository,
    Illuminate\Support\Facades\DB,
    Illuminate\Support\Facades\Log;

class MembroService {

    protected $membroRepository;

    public function __construct(MembroRepository $membroRepository) {
        $this->membroRepository = $membroRepository;
    }

    /**
     *
     * @param array $formData dados vindos do Formularios
     * @return type
     */
    public function save($formData) {
        DB::beginTransaction();

        try {


            $dataMemebro = $this->setDataMembro($formData);

            $this->membroRepository->create($dataMemebro);

            DB::commit();
            return '{"operacao":true}';
        } catch (\Illuminate\Database\QueryException $e) {

            $exception = $e->getMessage() . $e->getTraceAsString();
            Log::error($exception);

            DB::rollback();
            //Retorna as informacoes do erro.

            return '{"operacao": false}';
        } catch (\Yajra\Pdo\Oci8\Exceptions\Oci8Exception $e) {

            $exception = $e->getMessage() . $e->getTraceAsString();
            Log::error($exception);

            DB::rollback();
            //Retorna as informacoes do erro.
            return '{"operacao": false}';
        }
    }

    public function setDataMembro($data) {


        $dadosForm['nome'] = $data['nome'];
        $dadosForm['cpf'] = $data['cpf'];
        $dadosForm['dt_nascimento'] = date("Y-m-d", strtotime(str_replace('/', '-', $data['dt_nascimento'])));
        $dadosForm['dt_batizado'] = date("Y-m-d", strtotime(str_replace('/', '-', $data['dt_batizado'])));
        $dadosForm['ad_ipbs'] = date("Y-m-d", strtotime(str_replace('/', '-', $data['ad_ipbs'])));
        $dadosForm['naturalidade'] = $data['naturalizadade'];
        $dadosForm['estado_civil'] = $data['estado_civil'];
        $dadosForm['endereco'] = $data['endereco'];
        $dadosForm['profissao'] = $data['profissao'];
        $dadosForm['no_mae'] = $data['no_mae'];
        $dadosForm['no_pai'] = $data['no_pai'];
        $dadosForm['no_conjugue'] = $data['no_conjugue'];
        $dadosForm['celular'] = $data['celular'];
        $dadosForm['telefone'] = $data['telefone'];
        $dadosForm['email'] = $data['ds_email'];
        $dadosForm['cidade'] = $data['cidade'];
        $dadosForm['igreja_batizado'] = $data['igreja_batismo'];
        $dadosForm['st_ativo'] = 'S';
        $dadosForm['posicao_eclesiastica'] = $data['posicao_eclesiastica'];

        return $dadosForm;
    }

    public function update($formData) {
        DB::beginTransaction();

        try {
            $idMembro = $formData['membro'];

            $dataMemebro = $this->setDataMembro($formData);

            $this->membroRepository->update($dataMemebro, $idMembro, "id_membros");

            DB::commit();
            return '{"operacao": true}';
        } catch (\Illuminate\Database\QueryException $e) {

            $exception = $e->getMessage() . $e->getTraceAsString();
            Log::error($exception);

            DB::rollback();
            //Retorna as informacoes do erro.
            echo $exception;
            return '{"operacao": false}';
        } catch (\Yajra\Pdo\Oci8\Exceptions\Oci8Exception $e) {

            $exception = $e->getMessage() . $e->getTraceAsString();
            Log::error($exception);

            DB::rollback();
            //Retorna as informacoes do erro.
            return '{"operacao": false}';
        }
    }

    public function disable($id) {
        DB::beginTransaction();

        try {

            $data['st_ativo'] = 'N';

            $this->membroRepository->update($data, $id, "id_membros");

            DB::commit();
            return '{"operacao": true}';
        } catch (\Illuminate\Database\QueryException $e) {

            $exception = $e->getMessage() . $e->getTraceAsString();
            Log::error($exception);

            DB::rollback();
            //Retorna as informacoes do erro.
            echo $exception;
            return '{"operacao": false}';
        } catch (\Yajra\Pdo\Oci8\Exceptions\Oci8Exception $e) {

            $exception = $e->getMessage() . $e->getTraceAsString();
            Log::error($exception);

            DB::rollback();
            //Retorna as informacoes do erro.
            return '{"operacao": false}';
        }
    }

    public function abilitar($id) {
        DB::beginTransaction();

        try {

            $data['st_ativo'] = 'S';

            $this->membroRepository->update($data, $id, "id_membros");

            DB::commit();
            return '{"operacao": true}';
        } catch (\Illuminate\Database\QueryException $e) {

            $exception = $e->getMessage() . $e->getTraceAsString();
            Log::error($exception);

            DB::rollback();
            //Retorna as informacoes do erro.
            echo $exception;
            return '{"operacao": false}';
        } catch (\Yajra\Pdo\Oci8\Exceptions\Oci8Exception $e) {

            $exception = $e->getMessage() . $e->getTraceAsString();
            Log::error($exception);

            DB::rollback();
            //Retorna as informacoes do erro.
            return '{"operacao": false}';
        }
    }

}
