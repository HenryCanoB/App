"use strict"

var overlay = document.querySelector(".overlay");
var btn = document.querySelector("button");
var usuario = document.querySelector("#txtUsuario");
var pass = document.querySelector("#txtPassword");

window.addEventListener('DOMContentLoaded', () => {
    Loading(false);
    usuario.focus();
})
btn.addEventListener('click', (e) => {
    event.preventDefault(e);
    Acceder();
})

function Loading(flag) {
    if (flag == true) {
        overlay.classList.add('active');
    } else {
        window.setTimeout(() => {
            overlay.classList.remove('active');
        }, 200)
    }
}

function Valida() {
    if (usuario.value == "") {
        Alerta('warning', 'Ingrese Usuario!', 'Validación de acceso', 'txtUsuario');
        return false;
    }
    if (pass.value == "") {
        Alerta('warning', 'Ingrese Contraseña!', 'Validación de acceso', 'txtPassword');
        return false;
    }
    return true;

}

function Acceder() {

    if (Valida() == true) {
        Loading(true);
        window.location.href = "../index.php"
    }

}


/*
$(document).ready(function() {
    $('#txtUser').focus();
    $('#txtUser').parent().addClass("input-group-focus");

    $("#btnAcceder").click(function() {
        Validar();
    });

    $(".input-group > input").focus(function(e) {
        $(this).parent().addClass("input-group-focus");
    }).blur(function(e) {
        $(this).parent().removeClass("input-group-focus");
    });

    $("#txtPass").keypress(function(e) {
        if (e.which == 13) {
            $("#btnAcceder").click();
        }
    });

});

function Validar() {
    if ($("#txtUser").val().trim() != "") {
        if ($("#txtPass").val().trim() != "") {
            $("form#frmAcceder input[id=accion]").remove();
            $('form#frmAcceder').append('<input type="hidden" id="accion" name="accion" value="Validar" />');
            var form = $("#frmAcceder").serializeArray();
            $("form#frmAcceder input[id=accion]").remove();
            $.ajax({
                type: "POST",
                url: "controlador/cAcceso",
                data: form,
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    if (data.rpta == '1') {
                        //window.location.href = data.mensaje;
                        location.reload();
                    } else {
                        Alerta('warning', data.mensaje, '');
                        $("#txtPassword").val('');
                    }
                },
                error: function(result) {
                    //console.log(result);
                    Alerta("warning", result.responseText)
                        //Alerta("error", "No se pudo realizar la operación", "")
                }
            });
        } else {
            Alerta('warning', 'Ingrese Contraseña!', 'Validación de acceso', 'txtPass');
        }
    } else {
        Alerta('warning', 'Ingrese Usuario!', 'Validación de acceso', 'txtUser');
    }
}*/

function Alerta(tipo, titulo, texto, ctrl) {
    Swal.fire({
        icon: tipo,
        title: titulo,
        text: texto,
        //footer: '<a href>Why do I have this issue?</a>'
        didClose: function(result) {
            var control = document.querySelector("#" + ctrl);
            control.focus();
        }
    })
}