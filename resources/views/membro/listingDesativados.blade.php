@extends('layouts.principal')

@section('title','Membro')
@section('title-form','Membro')

@section('breadcrumb')
<li class="active">
    <a href="/"><strong>Home</strong></a>
</li>
<li>
    <a>Membros</a>
</li>
@endsection

@section('content')
<h1>Lista de Membros:</h1>
<table id="tb_membro" class="table table-striped table-bordered table-fluid" style="width: 100%;">
    <thead>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Nome Cônjugue</th>
            <th>Data Nascimento</th>
            <th>Telefone</th>
            <th>Celular(Whatsapp)</th>
            <th>Opções</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $dados)
        <tr>
            <td>{{$dados->nome}}</td>
            <td class="cpf">{{$dados->cpf}}</td>
            <td >{{$dados->no_conjugue}}</td>
            <td class="date"> {{\date_format($dados->dt_nascimento, "d/m/Y")}}
            <td class="phone_with_ddd">{{$dados->telefone}}</td>
            <td class="phone_with_ddd">{{$dados->celular}}</td>



            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-xs dtlMembro" value="{{$dados->id_membros}}" >Detalhar</button>

                    <button type="button" class="btn btn-primary btn-xs abilitarMembro"  value="{{$dados->id_membros}}">Ativar</button>
                </div>
            </td>
        </tr>
        @endforeach


    </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="myModal" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body" id="conteudoModal"></div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('assets/js/membro/dataTableListMembro.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/membro/modalCadMembro.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/membro/modalEdtMembro.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/membro/modalDtlMembro.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/membro/modalAbilitarMembro.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/mascaras/mascaras.js')}}"></script>

@endsection