import { elementos } from "./elementos.js";

function redesSociales() {
  const iconos = elementos("[data-tipo]");
  iconos.forEach(icono => {
    let _icono = icono.querySelector( "svg" );
  });
}

export { redesSociales };