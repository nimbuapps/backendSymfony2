// funcion que modifica una tupla en las tablas de recepcion, segun este o no ausente un paciente.
function ausente(id, pather, boton, texto) {
    $(document).ready(function() {

        $("#ausente" + id).click(function() {
//            alert("#ausente" + id);
            if ($("#ausente" + id).is(':checked')) {
                $('#trausente' + id).addClass("warning");
                $('#tdausente' + id).text(texto);
            } else {
                $('#trausente' + id).removeClass("warning");
                $('#tdausente' + id).html('<a class=\"label label-danger\" href=\"' + pather + '\">' + boton + '</a>');
            }
        });

    });

}

// oculta el bloque contiguo con informacion sobre el tipo de donacion
$('#tipodonac').change(function() {
    opt = $(this).val();
    if (opt === "Voluntaria") {
        $('#segundonacion').css({display: "none"});
    } else if (opt === "Reposicion" || opt === "Aferesis") {
        $('#segundonacion').css({display: "initial"});
    }
// fin del bloque
});

// oculta los campos cuando el diferimento es negativo 
$('#determinardif').change(function() {
    opt = $(this).val();
    if (opt === "no") {
        $('#diferimentoPositivo').css({display: "none"});
        $('.diferido').css({display: "none"});
        document.getElementById('difDesde').required = false;
        document.getElementById('difHasta').required = false;
    } else if (opt === "si") {
        $('#diferimentoPositivo').css({display: "initial"});
        $('.diferido').css({display: "initial"});
        document.getElementById('difDesde').required = true;
        document.getElementById('difHasta').required = true;
    }
});

//        Oculta los campos de diferimiento en la seccion de Inmunohematologia.
$('#inmunoDif').change(function() {
    opt = $(this).val();
    if (opt === "no") {
        $('.diferido').css({display: "none"});
    } else if (opt === "si") {
        $('.diferido').css({display: "initial"});
    }
});

//   filtra los campos segun sean terminados o pendientes.

// filtros de inmunohematología

var terminado = jQuery.noConflict();
terminado('#terminados').click(function() {
    terminado('.terminados').css({display: "table-row"});
    terminado('.pendientes').css({display: "none"});
    terminado('.sindatos').css({display: "none"});
});
var pendiente = jQuery.noConflict();
pendiente('#pendientes').click(function() {
    pendiente('.terminados').css({display: "none"});
    pendiente('.pendientes').css({display: "table-row"});
    pendiente('.sindatos').css({display: "none"});
});
var sindatos = jQuery.noConflict();
sindatos('#sindatos').click(function() {
    sindatos('.terminados').css({display: "none"});
    sindatos('.pendientes').css({display: "none"});
    sindatos('.sindatos').css({display: "table-row"});
});
var todos = jQuery.noConflict();
todos('#todos').click(function() {
    todos('.terminados').css({display: "table-row"});
    todos('.pendientes').css({display: "table-row"});
    todos('.sindatos').css({display: "table-row"});
});



// fin comentario temporal

//calcular la edad de una persona 
//recibe la fecha como un string en formato español 
//devuelve un entero con la edad. Devuelve false en caso de que la fecha sea incorrecta o mayor que el dia actual 
function calcular_edad(dia, mes, ano) {
    var year = ano;
    var month = mes;
    var day = dia;
    //calculo la fecha de hoy 
    hoy = new Date();
    //alert(hoy) 

    //compruebo que los ano, mes, dia son correctos 
    if (isNaN(year))
        return false;

    if (isNaN(month))
        return false;

    if (isNaN(day))
        return false;

    //si el año de la fecha que recibo solo tiene 2 cifras hay que cambiarlo a 4 
    if (ano <= 99) {
        ano += 1900;
    }


    //resto los años de las dos fechas 
    edad = hoy.getFullYear() - year - 1; //-1 porque no se si ha cumplido años ya este año 

    //si resto los meses y me da menor que 0 entonces no ha cumplido años. Si da mayor si ha cumplido 
    if (hoy.getMonth() + 1 - month < 0) //+ 1 porque los meses empiezan en 0 
        return edad;
    if (hoy.getMonth() + 1 - month > 0)
        return edad + 1;

    //entonces es que eran iguales. miro los dias 
    //si resto los dias y me da menor que 0 entonces no ha cumplido años. Si da mayor o igual si ha cumplido 
    if (hoy.getUTCDate() - day >= 0)
        return edad + 1;

    return edad;
}

jQuery(function($) {
    $("#telefono1").mask("(999) 9999999");
    $("#celular1").mask("(999) 159999999");
});


function fn_buscar() {
    // var str = $("#frm_buscar").serialize();
    var texto = document.getElementById('Btnciudad').value;
    $.ajax({
        url: 'ajax/buscar/' + texto,
        type: 'get',
        success: function(data) {
            $("#aqui").html(data);
        }
    });
}

function fn_buscar_EntreRios() {
    // var str = $("#frm_buscar").serialize();
    var textoes = document.getElementById('BtnciudadER').value;
    $.ajax({
        url: 'entrerios/buscar/' + textoes,
        type: 'get',
        success: function(data) {
            $("#aquiER").html(data);
        }
    });
}


function fn_buscar_otras() {
    // var str = $("#frm_buscar").serialize();
    var texto = document.getElementById('Btnciudad').value;
    $.ajax({
        url: 'ajax/buscar/otras/' + texto,
        type: 'get',
        success: function(data) {
            $("#aqui").html(data);
        }
    });
}

function confirm(event, msg) {
    var evt = event;
    event.preventDefault();
    alertify.confirm(msg, function(e) {
        if (e) {
            evt.currentTarget.submit();
            return true;
        } else {
            return false;
        }
    });
}