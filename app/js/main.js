import { imagenSVG } from "./modulos/imagenSVG.js";
import { redesSociales } from "./modulos/redesSociales.js";
import { menuHeader } from "./modulos/scrolling.js";
import { eliminarAtributo } from "./modulos/eliminarAtributos.js";
import { ventanasModales } from "./modulos/ventanasModales.js";

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