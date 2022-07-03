"use strict";
var body = document.querySelector("body");
var overlay = document.querySelector(".overlay");
var contenido = document.querySelector("#contenido");
var sidebar = document.querySelector("#sidebar1");
var btnOcultar = document.querySelector("#btnOcultar");
var btnMostrar = document.querySelector("#btnMostrar");
var mediaQuery = window.matchMedia('(max-width: 991px)')
var btnSpinner = document.querySelector("#btnSpinner");
var spinner = document.querySelector("#spinner");
var footer = document.querySelector("#footer");

function reportWindowSize() {
    //var ancho = window.screen.width;

    //console.log(mediaQuery.matches)
    //console.log(overlay.classList.contains('active'))

    window.addEventListener('DOMContentLoaded', Loading(false));

    if (mediaQuery.matches) {
        if (sidebar.classList.contains('active')) {
            sidebar.classList.remove('active');
        }
        if (overlay.classList.contains('active')) {
            overlay.classList.remove('active');
        }
        btnMostrar.style.display = "block";
    } else {
        if (overlay.classList.contains('active')) {
            console.log('quita');
            overlay.classList.remove('active');
        }
        contenido.classList.remove('active');
        footer.classList.remove('active');
        sidebar.classList.add('active');
        btnMostrar.style.display = "none";
    }
}
window.addEventListener('load', reportWindowSize);
window.addEventListener('resize', reportWindowSize);

overlay.addEventListener("click", (e) => {
    OcultarSidebar(e);
});

btnOcultar.addEventListener("click", (e) => {
    //Loading(true);
    OcultarSidebar(e);
    //Loading(false);
});

btnMostrar.addEventListener("click", (e) => {
    //Loading(true);
    MostrarSidebar(e);
    //Loading(false);
});

btnSpinner.addEventListener("click", (e) => {
    Loading(true);
});

function OcultarSidebar(e) {

    sidebar.classList.remove("active");

    if (mediaQuery.matches) {
        overlay.classList.remove('active');
    } else {
        contenido.classList.add("active");
        footer.classList.add('active');
    }
    btnMostrar.style.display = "block";
    document.activeElement.blur();


}

function MostrarSidebar(e) {

    sidebar.classList.add("active");
    if (mediaQuery.matches) {
        overlay.classList.add('active');
    } else {
        contenido.classList.remove("active");
        footer.classList.remove('active');
    }
    btnMostrar.style.display = "none";
    document.activeElement.blur();

}

function Loading(flag) {
    if (flag == true) {

        body.style.overflow = "hidden!important";
        body.style.paddingRight = "17px";
        body.classList.add("modal-open");
        spinner.classList.remove('invisible');
        spinner.classList.add('visible');

    } else {
        console.log(flag);
        window.setTimeout(() => {
            body.classList.remove("modal-open");
            spinner.classList.remove('visible');
            spinner.classList.add('invisible');
            body.style = ""
        }, 200)

    }
}

function Salir() {
    window.location.href = "frmLogin.aspx";
}

//function Ver(ctrl, pg) {
function Ver(pg) {

    /*
        if (ctrl != '') {
            //Quitar clase acive a todas las opciones
            var opciones = document.querySelector(".nav-link");
            var seleccionado = document.querySelector("#" + ctrl);

            opciones.removeClass("active");
            //Poner clase active a Opción
            seleccionado.addClass("active");
            //Poner clase active a Padre de opción
            var nv = seleccionado.attr("pos");
            var padreSeleccionado = document.querySelector("#" + nv);
            padreSeleccionado.addClass("active");
        }
    Loading(true);
    $.ajax({
        method: "POST",
        url: pg,
    }).done(function(html) {
        if (html != "") {
            $('#Contenido').html(html);
        } else {
            $(location).attr('href', 'index');
        }
    });*/
    Loading(true);
    /*var url = 'https://example.com/profile';*/
    var data = { "url": pg };
    var contenido = document.querySelector("#contenido");
    fetch('Controllers/' + pg, {
            method: 'GET', // or 'PUT'
            //body: JSON.stringify(data), // data can be `string` or {object}!
            /*headers: {
                'Content-Type': 'application/json'
            }*/
        }).then(function(response) {
            return response.text();
        })
        .then(function(html) {
            /*var parser = new DOMParser();
            var doc = parser.parseFromString(html, 'text/html');*/
            contenido.innerHTML = html;
        })
        .catch(error => console.error('Error:', error))

    Loading(false);
}