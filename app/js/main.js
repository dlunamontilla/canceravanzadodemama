import { imagenSVG } from "./modulos/imagenSVG.js";
import { redesSociales } from "./modulos/redesSociales.js";
import { menuHeader } from "./modulos/scrolling.js";
import { eliminarAtributo } from "./modulos/eliminarAtributos.js";
import { ventanasModales } from "./modulos/ventanasModales.js";
import { elementos } from "./modulos/elementos.js";
import {encuestas} from "./modulos/encuestas.js";

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