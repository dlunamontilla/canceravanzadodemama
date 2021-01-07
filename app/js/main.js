import { imagenSVG } from "./modulos/imagenSVG.js";
import { redesSociales } from "./modulos/redesSociales.js";
import { menuHeader } from "./modulos/scrolling.js";
import { eliminarAtributo } from "./modulos/eliminarAtributos.js";
import { ventanasModales } from "./modulos/ventanasModales.js";
import {encuestas} from "./modulos/encuestas.js";
import { csvToJSON } from "./modulos/csvToJSON.js";
import { csvToTable } from "./modulos/csvToTable.js";

imagenSVG();
redesSociales();

menuHeader();
onscroll = () => {
  menuHeader();
}

eliminarAtributo( "[data-src]" );

if ( typeof salir !== "undefined" )
  salir.onclick = () => {
    ventanasModales( "#modal", "modal--show" );
  }

if ( typeof modal !== "undefined" )
  modal.onclick = function(e) {

    if ( typeof e.target.dataset.tipo === "undefined" )
      return;

    switch ( e.target.dataset.tipo ) {
      case "modal-main":
        ventanasModales( "#modal", "modal--show" );
        break;
    }

    console.log( e.target );
  }

// Teclado:
onkeydown = (e) => {
  let tecla = e.key;

  switch (tecla ) {
    case "Escape":
      ventanasModales("#modal", "modal--show", true );
      break;
  }
}

// Evitar que se envíen los formularios:
// const formularios = elementos( "form" );

// if ( formularios.length > 0 )
//   formularios.forEach(formulario => {
//     formulario.addEventListener("submit", e => {
//       e.preventDefault();
//     }, false);
//   });

encuestas( "#encuestas" );

// Probar el funcionamiento del intérprete:
const probar = url => {
  fetch( url )
  .then( texto => texto.text() )
  .then( data => {
    let datos = csvToJSON( data, ";" );

    console.log( datos );
  });
}

// probar( "recursos/csv/glosario.csv" );

csvToTable( "recursos/csv/glosario.csv", "#glosario" );