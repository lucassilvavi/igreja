<form id="abilitarMembro">
    <input type="hidden" name="membro" id="membro" value="{{$id}}">

    <div class="row">
        <div class="col-md-3 form-group">
            <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Não</button>
        </div>
        <div class="col-md-3 col-md-offset-6 form-group">
            <button type="button" class="btn btn-block btn-success confirm" id="load">Sim</button>
        </div>
    </div>
</form>
<script type="text/javascript" src="{{asset('assets/js/membro/submitAbilitar.js')}}"></script>

