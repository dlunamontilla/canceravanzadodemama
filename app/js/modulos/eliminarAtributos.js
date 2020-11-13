import { elementos } from "./elementos.js";

const eliminarAtributo = selector => {
    if ( typeof selector === "undefined" )
        return;

    var destino = elementos( selector );

    // Opciones para observar cambios en los elementos:
    var opciones = {
        attributes: true,
        ChildList: true,
        characterData: true
    };

    // Instanciar el observador de cambios en el DOM:
}