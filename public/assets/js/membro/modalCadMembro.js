/**
 * Modal de cadastro de membro
 */

function modalCadMembro() {
    $.ajax({
        type: "get",
        url: "/formMembro/MembroController@saveMembro",
        beforeSend: function() {
            $('#myModal').modal('show');
            $('#conteudoModal').html('<i class="fa fa-spinner fa-pulse fa-2x fa-fw" style="color:blue;"></i>').show();
        },
        success: function(dados)
        {
            $(".modal-title").html('Cadastrar Membro');
            $("#myModal").modal('show');
            $("#conteudoModal").html(dados);
        }
    });
}
;
