// gsc-i-id1
import { ventanasModales } from "./modulos/ventanasModales.js";

(function () {
    const obtenerElemento = (selector) => {
        return document.querySelector(selector);
    }

    const [busquedaModal, search, contenedorBusqueda] = [
        obtenerElemento("#busqueda-modal"),
        obtenerElemento("#buscar"),
        obtenerElemento("#contenedor-busqueda")
    ];

    if (busquedaModal === null || contenedorBusqueda === null)
        return;

    if (search === null)
        return;

    console.clear();
    console.log("Ventana modal");

    search.onclick = () => {
        const busquedaGoogle = obtenerElemento("#gsc-i-id1");
        busquedaModal.classList.add("busqueda--mostrar");
        document.body.setAttribute("style", "overflow: hidden");

        console.clear();
        console.log(busquedaModal);
        contenedorBusqueda.classList.add("fadeIn");

        if (busquedaGoogle !== null)
            busquedaGoogle.focus();
    }

    busquedaModal.onclick = function (e) {
        let mostrando = e.target.classList.contains("busqueda--mostrar");
        if (mostrando)
            ventanasModales("#busqueda-modal", "busqueda--mostrar", true);
    }
})();