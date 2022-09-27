function elegirClasificacion() {
    switch (document.getElementById("selector").value) {
        case "1":
            document.getElementById("tablaclasificacion1").style.display = "inline";
            document.getElementById("tablaclasificacion2").style.display = "none";
            document.getElementById("tablaclasificacion3").style.display = "none";
            document.getElementById("tablaclasificacion4").style.display = "none";
            document.getElementById("tablaclasificacion5").style.display = "none";
            document.getElementById("tablaclasificacion6").style.display = "none";
            break;
        case "2":
            document.getElementById("tablaclasificacion1").style.display = "none";
            document.getElementById("tablaclasificacion2").style.display = "inline";
            document.getElementById("tablaclasificacion3").style.display = "none";
            document.getElementById("tablaclasificacion4").style.display = "none";
            document.getElementById("tablaclasificacion5").style.display = "none";
            document.getElementById("tablaclasificacion6").style.display = "none";
            break;
        case "3":
            document.getElementById("tablaclasificacion1").style.display = "none";
            document.getElementById("tablaclasificacion2").style.display = "none";
            document.getElementById("tablaclasificacion3").style.display = "inline";
            document.getElementById("tablaclasificacion4").style.display = "none";
            document.getElementById("tablaclasificacion5").style.display = "none";
            document.getElementById("tablaclasificacion6").style.display = "none";
            break;
        case "4":
            document.getElementById("tablaclasificacion1").style.display = "none";
            document.getElementById("tablaclasificacion2").style.display = "none";
            document.getElementById("tablaclasificacion3").style.display = "none";
            document.getElementById("tablaclasificacion4").style.display = "inline";
            document.getElementById("tablaclasificacion5").style.display = "none";
            document.getElementById("tablaclasificacion6").style.display = "none";
            break;
        case "5":
            document.getElementById("tablaclasificacion1").style.display = "none";
            document.getElementById("tablaclasificacion2").style.display = "none";
            document.getElementById("tablaclasificacion3").style.display = "none";
            document.getElementById("tablaclasificacion4").style.display = "none";
            document.getElementById("tablaclasificacion5").style.display = "inline";
            document.getElementById("tablaclasificacion6").style.display = "none";
            break;
        case "6":
            document.getElementById("tablaclasificacion1").style.display = "none";
            document.getElementById("tablaclasificacion2").style.display = "none";
            document.getElementById("tablaclasificacion3").style.display = "none";
            document.getElementById("tablaclasificacion4").style.display = "none";
            document.getElementById("tablaclasificacion5").style.display = "none";
            document.getElementById("tablaclasificacion6").style.display = "inline";
            break;
    }
}

function elegirCalendario() {
    switch (document.getElementById("selectorCalendario").value) {
        case "1":
            document.getElementById("tablacalendario1").style.display = "inline";
            document.getElementById("tablacalendario2").style.display = "none";
            document.getElementById("tablacalendario3").style.display = "none";
            document.getElementById("tablacalendario4").style.display = "none";
            document.getElementById("tablacalendario5").style.display = "none";
            document.getElementById("tablacalendario6").style.display = "none";
            break;
        case "2":
            document.getElementById("tablacalendario1").style.display = "none";
            document.getElementById("tablacalendario2").style.display = "inline";
            document.getElementById("tablacalendario3").style.display = "none";
            document.getElementById("tablacalendario4").style.display = "none";
            document.getElementById("tablacalendario5").style.display = "none";
            document.getElementById("tablacalendario6").style.display = "none";
            break;
        case "3":
            document.getElementById("tablacalendario1").style.display = "none";
            document.getElementById("tablacalendario2").style.display = "none";
            document.getElementById("tablacalendario3").style.display = "inline";
            document.getElementById("tablacalendario4").style.display = "none";
            document.getElementById("tablacalendario5").style.display = "none";
            document.getElementById("tablacalendario6").style.display = "none";
            break;
        case "4":
            document.getElementById("tablacalendario1").style.display = "none";
            document.getElementById("tablacalendario2").style.display = "none";
            document.getElementById("tablacalendario3").style.display = "none";
            document.getElementById("tablacalendario4").style.display = "inline";
            document.getElementById("tablacalendario5").style.display = "none";
            document.getElementById("tablacalendario6").style.display = "none";
            break;
        case "5":
            document.getElementById("tablacalendario1").style.display = "none";
            document.getElementById("tablacalendario2").style.display = "none";
            document.getElementById("tablacalendario3").style.display = "none";
            document.getElementById("tablacalendario4").style.display = "none";
            document.getElementById("tablacalendario5").style.display = "inline";
            document.getElementById("tablacalendario6").style.display = "none";
            break;
        case "6":
            document.getElementById("tablacalendario1").style.display = "none";
            document.getElementById("tablacalendario2").style.display = "none";
            document.getElementById("tablacalendario3").style.display = "none";
            document.getElementById("tablacalendario4").style.display = "none";
            document.getElementById("tablacalendario5").style.display = "none";
            document.getElementById("tablacalendario6").style.display = "inline";
            break;
    }
}

function elegirCodigos() {
    switch (document.getElementById("selectorCalendario").value) {
        case "1":
            document.getElementById("tablacodigos1").style.display = "inline";
            document.getElementById("tablacodigos2").style.display = "none";
            document.getElementById("tablacodigos3").style.display = "none";
            document.getElementById("tablacodigos4").style.display = "none";
            document.getElementById("tablacodigos5").style.display = "none";
            document.getElementById("tablacodigos6").style.display = "none";
            break;
        case "2":
            document.getElementById("tablacodigos1").style.display = "none";
            document.getElementById("tablacodigos2").style.display = "inline";
            document.getElementById("tablacodigos3").style.display = "none";
            document.getElementById("tablacodigos4").style.display = "none";
            document.getElementById("tablacodigos5").style.display = "none";
            document.getElementById("tablacodigos6").style.display = "none";
            break;
        case "3":
            document.getElementById("tablacodigos1").style.display = "none";
            document.getElementById("tablacodigos2").style.display = "none";
            document.getElementById("tablacodigos3").style.display = "inline";
            document.getElementById("tablacodigos4").style.display = "none";
            document.getElementById("tablacodigos5").style.display = "none";
            document.getElementById("tablacodigos6").style.display = "none";
            break;
        case "4":
            document.getElementById("tablacodigos1").style.display = "none";
            document.getElementById("tablacodigos2").style.display = "none";
            document.getElementById("tablacodigos3").style.display = "none";
            document.getElementById("tablacodigos4").style.display = "inline";
            document.getElementById("tablacodigos5").style.display = "none";
            document.getElementById("tablacodigos6").style.display = "none";
            break;
        case "5":
            document.getElementById("tablacodigos1").style.display = "none";
            document.getElementById("tablacodigos2").style.display = "none";
            document.getElementById("tablacodigos3").style.display = "none";
            document.getElementById("tablacodigos4").style.display = "none";
            document.getElementById("tablacodigos5").style.display = "inline";
            document.getElementById("tablacodigos6").style.display = "none";
            break;
        case "6":
            document.getElementById("tablacodigos1").style.display = "none";
            document.getElementById("tablacodigos2").style.display = "none";
            document.getElementById("tablacodigos3").style.display = "none";
            document.getElementById("tablacodigos4").style.display = "none";
            document.getElementById("tablacodigos5").style.display = "none";
            document.getElementById("tablacodigos6").style.display = "inline";
            break;
    }
}