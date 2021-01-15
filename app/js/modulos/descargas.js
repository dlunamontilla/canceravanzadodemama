import { elemento, elementos } from "./elementos.js";
import { crearHTML } from "./crearHTML.js";

const descargas = () => {
    // Obtenemos los enlaces que vamos a utilizar:
    const enlaces = elementos(".recursos__enlace");

    const evaluar = (objeto) => {
        return Object.prototype.toString.call(objeto);
    };

    const isNull = (objeto) => {
        return evaluar(objeto) === '[object Null]';
    };

    if (!enlaces.length)
        return;

    const modal = elemento("#modal"),
        modalTitle = elemento("#modalTitle"),
        modalContent = elemento(".modal__content"),
        iframe = crearHTML("iframe"),
        div = crearHTML("div");

    const documentos = () => {
        
    };

    iframe.classList.add("modal__document");

    if (isNull(modal) || isNull(modalTitle) || isNull(modalContent))
        return;

    enlaces.forEach((enlace) => {
        let archivo = "",
            vista = "recursos__enlace--view",
            download = "recursos__enlace--download";

        if (enlace.classList.contains(download)) {
            archivo = enlace.getAttribute("href").replace(/(descargas\/)/gi, "");
            archivo = archivo.replace(/(\_)/ig, " ");
            enlace.setAttribute("download", archivo);
        }

        enlace.addEventListener("click", function (e) {
            if (this.classList.contains(vista)) {
                e.preventDefault();

                // Abrir la ventana modal y mostrar el documento
                // PDF en ella:
                iframe.setAttribute("src", this.href);
                modalContent.appendChild(iframe);

                // Obtener título para la ventana Modal:
                modalTitle.textContent = (typeof this.dataset.title !== "undefined")
                    ? this.dataset.title : "";

                modal.classList.add("modal--show");
            }
        }, false);
    })

}

export { descargas };