
//Pone de color el home seleccionado, personas, empresas o institucional
function seleccionarHome(home) {

    if (home == "Personas") {
        $(".m01").addClass("selected");
    }

    if (home == "GrandesEmpresas") {
        $(".m02").addClass("selected");
    }

    if (home == "PyMes") {
        $(".m02").addClass("selected");
    }

    if (home == "Institucional") {
        $(".m03").addClass("selected");
    }
}