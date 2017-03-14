<?php

/**
 *
 */

namespace App\Http\Controllers;

use App\Repositories\MembroRepository,
    App\Services\MembroService,
    App\Repositories\EstadoRepository,
    App\Repositories\CidadeRepository,
    App\Http\Requests\MembroRequest;

/**
 * Class MembroController
 * @package App\Http\Controllers
 */
class MembroController extends Controller {

    /**
     * @var MembroRepository
     */
    protected $membroRepository,
            $estadoRepository,
            $cidadeRepository,
            $membroService;

    public function __construct(
    MembroRepository $membro, MembroService $membroService, EstadoRepository $estado, CidadeRepository $cidade
    ) {
        $this->membroRepository = $membro;
        $this->membroService = $membroService;
        $this->estadoRepository = $estado;
        $this->cidadeRepository = $cidade;
    }

    /**
     * Listagem de membros
     *
     * @return Array
     */
    public function listMembro() {

        $data = $this->membroRepository->getAtivo();
        return view('membro.listing')->with('data', $data);
    }

    /**
     * Listagem de membros desativados
     *
     * @return Array
     */
    public function listMembroDesativados() {

        $data = $this->membroRepository->getDesativados();

        return view('membro.listingDesativados')->with('data', $data);
    }

    /**
     * @param $action
     * @param null $id
     * @return $this
     */
    public function formMembro($action, $id = null) {
        if (isset($id)) {
            $data['membro'] = $this->membroRepository->find($id);
            $data['nascimento'] = date_format($data['membro']->dt_nascimento, "d/m/Y");
            $admissao = new \DateTime($data['membro']->ad_ipbs);
            $batizado = new \DateTime($data['membro']->dt_batizado);
            $nascimento = new \DateTime($data['membro']->dt_nascimento);
            $data['admissao'] = date_format($admissao, "d/m/Y");
            $data['batizado'] = date_format($batizado, "d/m/Y");
            $data['nascimento'] = date_format($nascimento, "d/m/Y");
        }

        $data['action'] = $action;


        return view('membro.formMembro')->with('data', $data);
    }

    /**
     * @param $id
     * @return $this
     */
    public function detalhesMembro($id) {
        $data['membro'] = $this->membroRepository->find($id);
        $admissao = new \DateTime($data['membro']->ad_ipbs);
        $data['admissao'] = date_format($admissao, "d/m/Y");





        return view('membro.detalhesMembro')->with('data', $data);
    }

    /**
     * @param $id
     * @return $this
     */
    public function formDisableMembro($id) {
        return view('membro.disableMembro')->with('id', $id);
    }

    /**
     * @param $id
     * @return $this
     */
    public function formAbilitarMembro($id) {
        return view('membro.abilitarMembro')->with('id', $id);
    }

    /**
     * @param MembroRequest $request
     * @return \App\Services\type
     */
    public function saveMembro(MembroRequest $membroRequest) {

        return $this->membroService->save($membroRequest->all());
    }

    /**
     * @param MembroRequest $request
     * @return string
     */
    public function editMembro(MembroRequest $membroRequest) {

        $dadosForm = $membroRequest->all();

        return $this->membroService->update($dadosForm);
    }

    /**
     * @param $id
     * @return string
     */
    public function disableMembro($id) {
        return $this->membroService->disable($id);
    }

    public function abilitarMembro($id) {
        return $this->membroService->abilitar($id);
    }

}
