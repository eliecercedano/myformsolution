// Tareas Firebase: CRUD de usuarios.
// Inicialización:
////////////////////////////////////////////////////////////////////////////////
var config =
{
    apiKey: "{{ config('services.firebase.api_key') }}",
    authDomain: "{{ config('services.firebase.auth_domain') }}",
    databaseURL: "{{ config('services.firebase.database_url') }}",
    storageBucket: "{{ config('services.firebase.storage_bucket') }}",
};
firebase.initializeApp(config);
var database = firebase.database();
var lastIndex = 0;
////////////////////////////////////////////////////////////////////////////////
// Obtener datos.
firebase.database().ref('usuarios/').on('value', function (snapshot) {
    var value = snapshot.val();
    var htmls = [];
    $.each(value, function (index, value) {
        if (value) {
            htmls.push('<tr>\
            <td>' + value.uid + '</td>\
            <td>' + value.name + '</td>\
            <td>' + value.email + '</td>\
            <td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '">Update</button>\
            <button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Delete</button></td>\
            </tr>');
        }
        lastIndex = index;
    });
    $('#tbody').html(htmls);
    $("#submitUser").removeClass('desabled');
});
////////////////////////////////////////////////////////////////////////////////
// Agregar datos (agregar usuario).
$('#adduser').on('click', function () {
    var values = $("#addUserRegister").serializeArray();
    var name = values[0].value;
    var email = values[1].value;
    var uid = values[2].value;
    var userID = lastIndex + 1;
    console.log(values);
    firebase.database().ref('usuarios/' + userID).set({
        uid: uid,
        name: name,
        email: email,
    });
    // Reasignar el último valor ID.
    lastIndex = userID;
    $("#addUserRegister input").val("");
});
////////////////////////////////////////////////////////////////////////////////
// Actualizar usuario.
var updateID = 0;
$('body').on('click', '.updateData', function () {
    updateID = $(this).attr('data-id');
    firebase.database().ref('usuarios/' + updateID).on('value', function (snapshot) {
        var values = snapshot.val();
        var updateData = '<div class="form-group">\
            <label for="first_name" class="col-md-12 col-form-label">Name</label>\
            <div class="col-md-12">\
                <input id="first_name" type="text" class="form-control" name="name" value="' + values.name + '" required autofocus>\
            </div>\
        </div>\
        <div class="form-group">\
            <label for="last_name" class="col-md-12 col-form-label">Email</label>\
            <div class="col-md-12">\
                <input id="last_name" type="text" class="form-control" name="email" value="' + values.email + '" required autofocus>\
            </div>\
        </div>';
        $('#updateBody').html(updateData);
    });
});
$('.updateUsuarios').on('click', function () {
    var values = $(".users-update-record-model").serializeArray();
    var postData = {
        name: values[0].value,
        email: values[1].value,
    };
    var updates = {};
    updates['/usuarios/' + updateID] = postData;
    firebase.database().ref().update(updates);
    $("#update-modal").modal('hide');
});
////////////////////////////////////////////////////////////////////////////////
// Remover Data.
$("body").on('click', '.removeData', function () {
    var id = $(this).attr('data-id');
    $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
});
$('.deleteRecord').on('click', function () {
    var values = $(".users-remove-record-model").serializeArray();
    var id = values[0].value;
    firebase.database().ref('usuarios/' + id).remove();
    $('body').find('.users-remove-record-model').find("input").remove();
    $("#remove-modal").modal('hide');
});
$('.remove-data-from-delete-form').click(function () {
    $('body').find('.users-remove-record-model').find("input").remove();
});
////////////////////////////////////////////////////////////////////////////////
