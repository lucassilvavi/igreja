<form action="{{action($data['action'])}}" method="POST" id="formMembro">

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="membro" value="{{$data['membro']->id_membros or ''}}">
    <div class="form-group">
        <label for="nome" class="control-label">* Nome: </label>
        <input type="text" class="form-control" name="nome" id="sigla" value="{{$data['membro']->nome or ''}}">
        <small class="help-block"></small>
    </div>
    <div class="form-group">
        <label for="cpf" class="control-label">CPF:</label><span class=""></span>
        <input type="text" class="form-control cpf" id="cpf" name="cpf" value="{{$data['membro']->cpf or ''}}">
        <small class="help-block"></small>
    </div>
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">

                <label>* Data de Nascimento:</label>
                <input type="text" class="form-control" value="{{$data['nascimento'] or '' }}" name="dt_nascimento"  id="nascimento">
                <span class="input-group-addon input-group">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>

            </div>
        </div>
        <div class='col-sm-6'>
            <div class="form-group">

                <label>* Data Batizado:</label>
                <input type="text" class="form-control" value="{{$data['batizado'] or ''}}" name="dt_batizado"  id="batizado">
                <span class="input-group-addon input-group">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>

            </div>
        </div>
        <div class='col-sm-6'>
            <div class="form-group">

                <label>* Admissão na IPBS:</label>
                <input type="text" class="form-control" value="{{$data['admissao'] or ''}}" name="ad_ipbs"  id="admissao">
                <span class="input-group-addon input-group">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="estado_civil">Posição eclesiástica</label>
            <div class="col-md-6">
                <select id="posicao_eclesiastica" name="posicao_eclesiastica" class="form-control">
                    <option value="Membro" @if(isset($data['membro']->posicao_eclesiastica)){{$data['membro']->posicao_eclesiastica == 'Membro' ? 'selected' : ''}} @endif>Membro</option>
                    <option value="Obreio" @if(isset($data['membro']->posicao_eclesiastica)){{$data['membro']->posicao_eclesiastica == 'Obreio' ? 'selected' : ''}} @endif>Obreio (a) Cooperador (a)</option>
                    <option value="Diacono" @if(isset($data['membro']->posicao_eclesiastica)){{$data['membro']->posicao_eclesiastica == 'Diacono' ? 'selected' : ''}}  @endif>Diácono (a)</option>
                    <option value="Evangelista"@if(isset($data['membro']->posicao_eclesiastica)) {{$data['membro']->posicao_eclesiastica == 'Evangelista' ? 'selected' : ''}}  @endif>Evangelista</option>
                    <option value="Presbitero" @if(isset($data['membro']->posicao_eclesiastica)){{$data['membro']->posicao_eclesiastica == 'Presbitero' ? 'selected' : ''}}  @endif>Presbítero</option>
                    <option value="Missionario" @if(isset($data['membro']->posicao_eclesiastica)){{$data['membro']->posicao_eclesiastica == 'Missionario' ? 'selected' : ''}}  @endif>Missionário (a)</option>
                    <option value="Pastor" @if(isset($data['membro']->posicao_eclesiastica)){{$data['membro']->posicao_eclesiastica == 'Pastor' ? 'selected' : ''}}  @endif>Pastor (a)</option>
                    <option value="Levita" @if(isset($data['membro']->posicao_eclesiastica)){{$data['membro']->posicao_eclesiastica == 'Levita' ? 'selected' : ''}}  @endif>Levita</option>
                </select>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="naturalizadade" class="control-label">Naturalidade:</label><span class=""></span>
            <input type="text" class="form-control" id="naturalizadade" name="naturalizadade" value="{{$data['membro']->naturalidade or ''}}">
            <small class="help-block"></small>
        </div>
        <div class="form-group">
            <label class="col-md-6 control-label" for="estado_civil">Estado Civil</label>
            <div class="col-md-6">
                <select id="estado_civil" name="estado_civil" class="form-control">
                    <option value="Solteiro" @if(isset($data['membro']->estado_civil)){{$data['membro']->estado_civil == 'Solteiro' ? 'selected' : ''}}@endif>Solteiro</option>
                    <option value="Casado" @if(isset($data['membro']->estado_civil)){{$data['membro']->estado_civil == 'Casado' ? 'selected' : ''}}@endif>Casado</option>
                    <option value="Divorciado" @if(isset($data['membro']->estado_civil)){{$data['membro']->estado_civil == 'Divorciado' ? 'selected' : ''}}@endif>Divorciado</option>
                    <option value="Viuvo" @if(isset($data['membro']->estado_civil)){{$data['membro']->estado_civil == 'Viuvo' ? 'selected' : ''}}@endif>Viúvo</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="endereco" class="control-label">Endereço:</label>
        <input type="text" class="form-control " id="endereco" name="endereco" value="{{$data['membro']->endereco or ''}}">
        <small class="help-block"></small>
    </div>
    <div class="form-group">
        <label for="cidade" class="control-label">Cidade:</label>
        <input type="text" class="form-control " id="cidade" name="cidade" value="{{$data['membro']->cidade or ''}}">
        <small class="help-block"></small>
    </div>

    <div class="form-group">
        <label for="profissao" class="control-label">Profissão:</label><span class=""></span>
        <input type="text" class="form-control" id="profissao" name="profissao" value="{{$data['membro']->profissao or ''}}">
        <small class="help-block"></small>
    </div>
    <div class="form-group">
        <label for="no_mae" class="control-label">Nome da Mãe:</label><span class=""></span>
        <input type="text" class="form-control" id="no_mae" name="no_mae" value="{{$data['membro']->no_mae or ''}}">
        <small class="help-block"></small>
    </div>
    <div class="form-group">
        <label for="no_pai" class="control-label">Nome do Pai:</label><span class=""></span>
        <input type="text" class="form-control" id="no_pai" name="no_pai" value="{{$data['membro']->no_pai or ''}}">
        <small class="help-block"></small>
    </div>

    <div class="form-group">
        <label for="no_conjugue" class="control-label">Nome do Cônjugue:</label><span class=""></span>
        <input type="text" class="form-control" id="no_conjugue" name="no_conjugue" value="{{$data['membro']->no_conjugue or ''}}">
        <small class="help-block"></small>
    </div>
    <div class="form-group">
        <label for="celular" class="control-label">Celular (Whatsapp):</label><span class=""></span>
        <input type="text" class="form-control phones" id="celular" name="celular" value="{{$data['membro']->celular or ''}}">
        <small class="help-block"></small>
    </div>
    <div class="form-group">
        <label for="telefone" class="control-label">Telefone:</label><span class=""></span>
        <input type="text" class="form-control phones" id="telefone" name="telefone" value="{{$data['membro']->telefone or ''}}">
        <small class="help-block"></small>
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" placeholder="Email@email.com"
               class="form-control" name="ds_email" id="email" value="{{$data['membro']->email or ''}}">
        <small class="help-block"></small>
    </div>


    <div class="form-group">
        <label for="igreja_batismo">* Igreja de Batismo:</label>
        <input type="text"
               class="form-control" name="igreja_batismo" id="igreja_batismo" value="{{$data['membro']->igreja_batizado or ''}}">
        <small class="help-block"></small>
    </div>
    <div class="row">
        <div class="col-md-12 col-md-offset-0 form-group">
            <button type="submit" class="btn btn-block btn-success " id="">Salvar</button>
        </div>

    </div>

</form>

<script type="text/javascript" src="{{asset('assets/js/submit.js')}}"></script>
<script type="text/javascript">
$("#formMembro").on("submit", function() {
    submit('#formMembro', function(validate) {
        if ($.parseJSON(validate).operacao) {
            location.reload();
        }
    });
});
</script>
<script type="text/javascript">
    $(function() {
        $("#nascimento").datepicker();
        $("#batizado").datepicker();
        $("#admissao").datepicker();

    });
</script>

<script type="text/javascript" src="{{asset('assets/js/mascaras/mascaras.js')}}"></script>