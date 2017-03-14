
$(document).ready(function() {
    $(".dataTable").on('click', '.abilitarMembro', function() {

        var id = $(this).val();

        $.ajax({
            type: "get",
            url: "/formAbilitarMembro/" + id,

            beforeSend: function() {
                $('#myModal').modal('show');
                $('#conteudoModal').html('<i class="fa fa-spinner fa-pulse fa-2x fa-fw" style="color:#436cff;"></i>');
            },
            success: function(dados) {
                $(".modal-title").html('Realmente deseja Ativar este Membro?');
                $("#conteudoModal").html(dados);
            }
        });
    });

});


