import { imagenSVG } from "./modulos/imagenSVG.js";
import { redesSociales } from "./modulos/redesSociales.js";
import { menuHeader } from "./modulos/scrolling.js";
import { eliminarAtributo } from "./modulos/eliminarAtributos.js";
import { ventanasModales } from "./modulos/ventanasModales.js";

console.clear();

imagenSVG();
redesSociales();

menuHeader();
onscroll = () => {
  menuHeader();
}

eliminarAtributo( "[data-src]" );

salir.onclick = () => {
  ventanasModales( "#modal", "modal--show" );
}