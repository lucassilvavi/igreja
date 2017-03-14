
$(document).ready(function() {
    $(".confirm").click(function() {

        var id = $('#membro').val();

        $.ajax({
            type: "get",
            url: "/disableMembro/" + id,

            beforeSend: function() {
                $('#myModal').modal('show');
                $('#conteudoModal').html('<i class="fa fa-spinner fa-pulse fa-2x fa-fw" style="color:#436cff;"></i>');
            },
            success: function(data)
            {
                try {
                    if (Object.values($.parseJSON(data))[0] !== true) {
                        $('#conteudoModal').html(data);
                    } else {
                        location.reload();
                    }
                } catch (e) {
                    console.log('Retorno em formato inesperado: ' + data, '\n' + e);
                    return false;
                }

            }
        });
    });
});