import { elemento } from "./elementos.js";

const ventanasModales = ( selector, clase, salir ) => {
    if ( typeof selector === "undefined" )
        return;

    if ( typeof clase !== "string" )
        return;
    
    const ventana = elemento( selector );

    if ( ventana === null )
        return;

    const removerAtributo = () => {
        let body = elemento( "body" );
        if ( body !== null && body.hasAttribute("style") )
            body.removeAttribute("style");
    };

    // En el caso que se desee salir de forma explícita:
    if ( typeof salir !== "undefined" && salir ) {
        if ( ventana.classList.contains( clase ) )
            ventana.classList.remove( clase );

        removerAtributo();
        return;
    }
        
    ventana.classList.toggle( clase );
    removerAtributo();
}

export { ventanasModales };