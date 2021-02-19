import { imagenSVG } from "./modulos/imagenSVG.js";
import { redesSociales } from "./modulos/redesSociales.js";
import { menuHeader } from "./modulos/scrolling.js";
import { eliminarAtributo } from "./modulos/eliminarAtributos.js";
import { ventanasModales } from "./modulos/ventanasModales.js";
import { encuestas } from "./modulos/encuestas.js";
import { csvToTable } from "./modulos/csvToTable.js";
import { descargas } from "./modulos/descargas.js";

imagenSVG();
redesSociales();

menuHeader();
onscroll = () => {
  menuHeader();
}

eliminarAtributo("[data-src]");

if (typeof salir !== "undefined")
  salir.onclick = () => {
    ventanasModales("#modal", "modal--show");
  }

if (typeof modal !== "undefined")
  modal.onclick = function (e) {

    if (typeof e.target.dataset.tipo === "undefined")
      return;

    switch (e.target.dataset.tipo) {
      case "modal-main":
        ventanasModales("#modal", "modal--show");
        break;
    }
  }

// Teclado:
onkeydown = (e) => {
  let tecla = e.key;

  switch (tecla) {
    case "Escape":
      ventanasModales("#modal", "modal--show", true);
      break;
  }
}

encuestas("#encuestas");
csvToTable("recursos/csv/glosario.csv", "#glosario");

// Probar la función descargas:
descargas({
  selector: ".recursos__options",
  clase: "clase",

  // Modos:
  opciones: {
    clase: "recursos__enlace",
    vista: "--view",
    descarga: "--download"
  }
});
