import { elemento } from "./elementos.js";

const ventanasModales = ( selector, clase ) => {
    if ( typeof selector === "undefined" )
        return;

    if ( typeof clase !== "string" )
        return;
    
    const ventana = elemento( selector );
    ventana.classList.toggle( clase );
}

export { ventanasModales };