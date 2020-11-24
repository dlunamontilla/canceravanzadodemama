const limpiarSVG = ( texto ) => {
    let expresion = /((\<script\D?)+[^\<]*(\<\/script?\D|\>?)*)/gim;
    console.log("Se inicia una prueba");
    return texto.replace( expresion, "" );
}

export { limpiarSVG };