<style>

    @media print{
        #printTeste{
            background-color: #0000FF;
        }
        .boxDtl span{
            display: block;
            font-weight: bold;
        }
    }

</style>
<div class="row">
    <button type="button"  id="btnPrint" class="btn btn-block btn-success" data-dismiss="modal">Imprimir</button>
</div>
<div id="printTeste" class="boxDtl row">

    <div  class="col-md-6">
        <span>Nome: </span>
        <p>{{$data['membro']->nome}}</p>
        <span>CPF: </span>
        <p class="cpf">{{$data['membro']->cpf}}</p>
        <span>Data Nascimento: </span>
        <p class="date"> {{\date_format($data['membro']->dt_nascimento, "d/m/Y")}} </p>
        <span>Data Batizado: </span>
        <p class="date"> {{\date_format($data['membro']->dt_batizado, "d/m/Y")}} </p>
        <span>Admissao na IPBS: </span>
        <p class="date"> {{$data['admissao']}} </p>
        <span>Naturalidade: </span>
        <p>{{$data['membro']->naturalidade}}</p>
        <span>Estado Civil: </span>
        <p>{{$data['membro']->estado_civil}}</p>
        <span>E-mail: </span>
        <p>{{$data['membro']->email}}</p>
        <span>Igreja de Batismo: </span>
        <p>{{$data['membro']->igreja_batizado}}</p>
    </div>
    <div class="col-md-6">
        <span>Posição eclesiástica: </span>
        <p>{{$data['membro']->posicao_eclesiastica}}</p>
        <span>Endereço: </span>
        <p>{{$data['membro']->endereco}}</p>
        <span>Cidade: </span>
        <p>{{$data['membro']->cidade | 'não possui'}}</p>
        <span>Profissão: </span>
        <p>{{$data['membro']->profissao}}</p>
        <span>Nome Mãe: </span>
        <p>{{$data['membro']->no_mae}}</p>
        <span>Nome Pai: </span>
        <p>{{$data['membro']->no_pai}}</p>
        <span>Nome Cônjugue: </span>
        <p>{{$data['membro']->no_conjugue}}</p>
        <span>Celular(Whatsapp): </span>
        <p class="phones">{{$data['membro']->celular}}</p>
        <span>Telefone: </span>
        <p class="phones">{{$data['membro']->telefone}}</p>

    </div>
</div>


<div class="row">
    <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Sair</button>
</div>
<script type="text/javascript" src="{{asset('assets/js/mascaras/mascaras.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jQuery.print.js')}}"></script>
<script type="text/javascript">

$("#btnPrint").click(function() {
    $('#printTeste').print({
        globalStyles: true,
        mediaPrint: false,
        stylesheet: ('assets/css/imprimir.css'),
        noPrintSelector: ".no-print",
        iframe: true,
        append: null,
        prepend: null,
        manuallyCopyFormValues: true,
        deferred: $.Deferred(),
        timeout: 750,
        title: null,
        doctype: '<!doctype html>'
    });
});

</script>