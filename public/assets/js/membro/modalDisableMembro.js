/**
 * Modal de detalhes de membro
 */
$(document).ready(function() {
    $(".dataTable").on('click', '.disableMembro', function() {

        var id = $(this).val();
        $.ajax({
            type: "get",
            url: "/formDisableMembro/" + id,
            beforeSend: function() {
                $('#myModal').modal('show');
                $('#conteudoModal').html('<i class="fa fa-spinner fa-pulse fa-2x fa-fw" style="color:#436cff;"></i>');
            },
            success: function(dados) {
                $(".modal-title").html('Realmente deseja Desativar este Membro?');
                $("#conteudoModal").html(dados);
            }
        });
    });
});