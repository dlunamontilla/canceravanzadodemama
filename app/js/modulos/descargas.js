import { imagenSVG } from "./imagenSVG.js";
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

        // Preparando tipos de elementos para las tarjetas:
        div = crearHTML("div"),
        cabecera = crearHTML("header"),
        seccion = crearHTML("section"),
        enlace = crearHTML("a");


    const documentos = ( data ) => {
        if ( ! ("header" in data) ) return;

        let { icon, headerTitle } = data.header;
        if ( isNull( modalContent ) )
            return;

        let documento = div.cloneNode( false ),
            divIcon = div.cloneNode( false ),
            divTitle = div.cloneNode( false );

        // Implementación el ícono y título:
        divIcon.classList.add( "documentos__icon" );
        divTitle.classList.add("documentos__title" );

        // Implementación de ícono SVG y cadena en el título:
        divIcon.setAttribute("data-src", icon );
        divTitle.textContent = headerTitle;
        
        // Implementación de la cabecera de la tarjeta:
        cabecera.innerHTML  = "";
        cabecera.append( divIcon, divTitle );
        
        // Si el elemento a evaluar no es un array no continúa:
        if ( ! (Array.isArray( data.cuerpo )) )
            return;

        // Implementar las tarjetas en el cuerpo del documento:
        let cuerpo = seccion.cloneNode( false );
        for ( let datos of data.cuerpo ) {
            let { icons, title, caption, href } = datos;

            // Si todos estos elementos no están definidos debe
            // saltárselo y seguir:
            if (
                typeof icons == "undefined" ||
                typeof title == "undefined" ||
                typeof caption == "undefined" ||
                typeof href == "undefined"
            ) {
                continue;
            }

            // Elementos de la tarjeta:
            let tarjeta = enlace.cloneNode( false ),

                // «contenedorGrafico» contiene a «identificador» y «tituloTarjeta»
                contenedorGrafico = div.cloneNode( false ),
                identificador = div.cloneNode( false ),
                tituloTarjeta = div.cloneNode( false ),


                // «descripcion» contiene a a «leyenda« e «iconoDescarga»
                descripcion = div.cloneNode( false ),
                leyenda = div.cloneNode( false ),
                iconoDescarga = div.cloneNode( false );

            // Implementación de clases:
            tarjeta.classList.add( "tarjetas__item" );
            tarjeta.setAttribute("title", `Presione para descargar "${caption}"`)
            
            // Aplicar clases al contenedor gráfico con sus elementos:
            contenedorGrafico.classList.add("tarjetas__contenedor-grafico");
            identificador.classList.add("tarjetas__identificador");
            tituloTarjeta.classList.add("tarjetas__titulo");

            // Aplicar clases a la descripción de la tarjeta 
            // con sus elementos:
            descripcion.classList.add("tarjetas__descripcion");
            leyenda.classList.add("tarjetas__leyenda");
            iconoDescarga.classList.add("tarjetas__descarga");

            // Implementar contenido de la tarjeta:
            if ( "identificador" in icons )
                identificador.setAttribute( "data-src", icons.identificador);

            if ( "descarga" in icons )
                iconoDescarga.setAttribute("data-src", icons.descarga );
            
            // Incorporar la url al enlace:
            tarjeta.setAttribute("href", href);
            tarjeta.setAttribute("download", caption);

            // Agregando contenido:
            tituloTarjeta.textContent = title;
            contenedorGrafico.append( identificador, tituloTarjeta );

            leyenda.textContent = caption;
            
            // Se incorporarán leyendas y descargas en el área de descripción:
            descripcion.append( leyenda, iconoDescarga );

            // Incorporar todos estos elementos al enlace:
            tarjeta.append( contenedorGrafico, descripcion );
            
            cuerpo.appendChild( tarjeta );
        }

        // Implementación de clases:
        documento.classList.add( "documentos" );
        cabecera.classList.add("documentos__header");
        cuerpo.classList.add("documentos__cuerpo", "tarjetas");

        // Incorporar los elementos al documento:
        documento.append( cabecera, cuerpo );

        // Limpiar contenido de la Ventana Modal antes de ingresar:
        modalContent.innerHTML = "";

        return documento;
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
                const isJSON = /(\.json)/ig;

                // Obtener título para la ventana Modal:
                modalTitle.textContent = (typeof this.dataset.title !== "undefined")
                    ? this.dataset.title : "";

                // Limpiar el contenedor de la ventana modal:
                // modalContent.removeChild();
                modalContent.innerHTML = "";

                // Abrir la ventana modal:
                modal.classList.add("modal--show");
                document.body.setAttribute("style", "overflow: hidden");

                // Cargar el archivo JSON en la ventana modal
                // si lo es:
                if ( isJSON.test( this.href ) ) {
                    // Vaciar elementos:s
                    modalContent.innerHTML = "";

                    fetch( this.href, {
                        cache: "no-store",
                        pragma: "no-cache"
                    })
                    .then( respuesta => respuesta.json() )
                    .then( data => {
                        modalContent.appendChild( documentos( data ) );

                        // Implementar los gráficos vectoriales en la ventana modal:
                        imagenSVG();
                    });

                    return;
                }

                // Cargar un documento en formato PDF en la ventana modal:
                iframe.setAttribute("src", this.href);
                modalContent.appendChild(iframe);
            }
        }, false);
    })

}

export { descargas };