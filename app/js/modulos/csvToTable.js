import { elemento } from "./elementos.js";
import { crearHTML } from "./crearHTML.js";
import { csvToJSON } from "./csvToJSON.js"

const  csvToTable = ( URL, elementoHTML ) => {
    const tabla = crearHTML("table"),
        thead = crearHTML("thead"),
        tbody = crearHTML("tbody"),
        tr = crearHTML("tr"),
        th = crearHTML("th"),
        td = crearHTML("td");

    // Implementar clase a la tabla de gloarios de términos:
    tabla.classList.add("glosario__tabla");

    // Preparar cabecera y cuerpo de la tabla:
    tabla.append( thead, tbody );

    if ( typeof URL === "undefined" ) return;
    if ( typeof elementoHTML === "undefined" || elementoHTML === null )
        return;

    const parsearTabla = ( JSON ) => {
        let datos = [];

        const isObject = ( expresion ) => {
            return Object.prototype.toString.call( expresion ) === "[object Object]";
        };

        if (
            typeof JSON === "undefined" ||
            !( isObject( JSON ) || Array.isArray( JSON ) )
        ) {
            return;
        }

        datos = ( isObject( JSON ) ) ? [JSON] : JSON;

        // Obtener los campos paa la tabla:
        datos.forEach( ( objeto, indice ) => {
            // Obtener propiedades de objetos como campos
            // de tabla:
            if ( indice === 0 ) {
                let campos = tr.cloneNode( false );

                for ( let propiedad in objeto ) {
                    let campo = th.cloneNode( false );
                    campo.textContent = propiedad;
                    campos.append( campo );
                }

                thead.append( campos );
            }

            // Ingresar el valor de las propiedades como
            // datos tabulados en la tabla:
            if ( indice > 0 ) {
                let registro = tr.cloneNode( false );

                for ( let propiedad in objeto ) {
                    let campo = td.cloneNode( false );
                    campo.textContent = objeto[propiedad];
                    registro.append( campo );
                }

                tbody.append( registro );
            }
        });

        return tabla;

    }

    if ( typeof URL !== "string" )
        return;

    fetch( URL )
    .then( respuesta => respuesta.text() )
    .then( data => {
        let json = csvToJSON( data, ";" );
        let tabla = parsearTabla( json );
        const glosario = elemento( elementoHTML );

        console.log( json );
        
        if ( glosario !== null )
            glosario.appendChild( tabla );
    });
}

export { csvToTable };