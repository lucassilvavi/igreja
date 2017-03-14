/**
 * Modal de detalhes de membro
 */
$(document).ready(function() {

    $(".dataTable").on('click', '.dtlMembro', function() {


        var id = $(this).val();
        $.ajax({
            type: "get",
            url: "/dtlMembro/" + id,
            beforeSend: function() {
                $('#myModal').modal('show');
                $('#conteudoModal').html('<i class="fa fa-spinner fa-pulse fa-2x fa-fw" style="color:#436cff;"></i>');
            },
            success: function(dados) {
                $(".modal-title").html('Detalhes Membro');
                $("#conteudoModal").html(dados);
            }
        });
    });
});