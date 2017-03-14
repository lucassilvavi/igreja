/**
 * Modal de edição de membro
 */

$(document).ready(function() {

    $(".dataTable").on('click', '.edtMembro', function() {

        var id = $(this).val();
        $.ajax({
            type: "get",
            url: "/formMembro/MembroController@editMembro/" + id,
            beforeSend: function() {
                $('#myModal').modal('show');
                $('#conteudoModal').html('<i class="fa fa-spinner fa-pulse fa-2x fa-fw" style="color:#436cff;"></i>');
            },
            success: function(dados) {
                $(".modal-title").html('Editar Membro');
                $("#conteudoModal").html(dados);
            }
        });
    });
});