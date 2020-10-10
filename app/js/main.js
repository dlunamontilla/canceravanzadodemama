import { imagenSVG } from "./modulos/imagenSVG.js";
import { redesSociales } from "./modulos/redesSociales.js";
import { menuHeader } from "./modulos/scrolling.js";

console.clear();

imagenSVG();
redesSociales();

menuHeader();
onscroll = () => {
  menuHeader();
}