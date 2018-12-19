$(document).ready(function () {
    ////----- Open the modal to CREATE a user-----////
    $('#btn-add').click(function () {
        $('#btn-save').val("add");
        $('#modalFormData').trigger("reset");
        $('#usuarioEditorModal').modal('show');
    });
 
    ////----- Open the modal to UPDATE a user -----////
    $('body').on('click', '.open-modal', function () {
        var usuario_id = $(this).val();
        $.get('usuario/' + usuario_id, function (data) {
            $('#usuario_id').val(data.idUsuario);
            $('#Apellido').val(data.Apellido);
            $('#Nombre').val(data.Nombre);
            $('#Usuario').val(data.Usuario);
            $('#Pass').val(data.Pass);
            $('#btn-save').val("update");
            $('#usuarioEditorModal').modal('show');
        })
    });
 // Clicking the save button on the open modal for both CREATE and UPDATE
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            Apellido: $('#Apellido').val(),
            Nombre: $('#Nombre').val(),
            Usuario: $('#Usuario').val(),
            Pass: $('#Pass').val(),
            
        };
        var state = $('#btn-save').val();
        var type = "POST";
        var usuario_id = $('#usuario_id').val();
        var ajaxurl = 'links';
        if (state == "update") {
            type = "PUT";
            ajaxurl = 'usuario/' + usuario_id;
        }
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                var  = '<tr id="usuario' + data.id + '"><td>' + data.id + '</td><td>' + data.Apellido + '</td><td>' + data.Nombre + '</td><td>' + data.Usuario + '</td><td>' + data.Pass + '</td>';
                usuario += '<td><button class="btn btn-info open-modal" value="' + data.id + '">Edit</button>&nbsp;';
                usuario += '<button class="btn btn-danger delete-link" value="' + data.id + '">Delete</button></td></tr>';
                if (state == "add") {
                    $('#usuarios-list').append(usuario);
                } else {
                    $("#usuario" + usuario_id).replaceWith(usuario);
                }
                $('#modalFormData').trigger("reset");
                $('#usuarioEditorModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
 
    ////----- DELETE a link and remove from the page -----////
    $('.delete-link').click(function () {
        var usuario_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "DELETE",
            url: 'usuario/' + usuario_id,
            success: function (data) {
                console.log(data);
                $("#usuario" + usuario_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});