function imprimir(divAImprimir,tituloAImprimir,classAEliminar) {

    $.ajax({
        url: '/Home/Impresion',
        type: "GET",
        async: false,
        success: function (result) {

            var titulo;
            var contenidoImpresion='';
            //titulo si hay
            if (tituloAImprimir != null && tituloAImprimir!='') {
                titulo = '<h3>' + $('#' + tituloAImprimir).html(); +'</h3>';
                contenidoImpresion += titulo;
            }
           
            contenidoImpresion += $('#' + divAImprimir).html();

            var resultadoHtml = result.replace("contenidoImpresion", contenidoImpresion);

            var newWindow = window.open();
            newWindow.document.write(resultadoHtml);
            newWindow.document.close();
        }
    });

}