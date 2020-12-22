import { elementos } from "./elementos.js";
import { imagenSVG } from "./imagenSVG.js";

const eliminarAtributo = selector => {
    if ( typeof selector !== "string" )
        return;

    var destinos = elementos( selector );

    // Opciones para observar cambios en los elementos:
    var opciones = {
        attributes: true,
        childList: true,
        characterData: true
    };

    var observador = new MutationObserver(function(cambios) {
        cambios.forEach(cambio => {
            let svgs = elementos( "svg" );
            imagenSVG();
            
            svgs.forEach(svg => {
                if ( typeof svg.height !== "undefined" ) svg.removeAttribute("height");
                if ( typeof svg.width !== "undefined" ) svg.removeAttribute("width");
            });
        });
    });

    // Instanciar el observador de cambios en el DOM:
    destinos.forEach(destino => {
        observador.observe( destino, opciones );
    });
}

export { eliminarAtributo };