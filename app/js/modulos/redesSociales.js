import { elementos } from "./elementos.js";

function redesSociales() {
  console.clear();
  console.log("Ciencia de datos");

  const iconos = elementos("[data-tipo]");
  iconos.forEach(icono => {
    let _icono = icono.querySelector( "svg" );
    // console.log(_icono.textContent);
    console.log( "Datos =>", _icono );
  });
}

export { redesSociales };