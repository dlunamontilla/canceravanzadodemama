import { elemento } from "./elementos.js";

const encuestas = ( selector ) => {
  if ( typeof selector === "undefined" )
    return;

    let boton = elemento( selector );
    if ( boton === null ) return;

    boton.onclick = () => {
      if (
        modal === null ||
        modalTitle === null
      ) {
        return;
      }

      modal.classList.add("modal--show");
      modalTitle.textContent = "Realizar encuestas";

      let modalContent = elemento(".modal__content");
      if ( modalContent === null ) return;

      modalContent.innerHTML = "<h4>En proceso de implementación</h4> <p>Ya se encuentra lista la encuensta, sin embargo, aún no se encuentra disponible en esta Web. Su implementación se realizará las próximas horas</p><div data-src='multimedia/vectores/guia-icon.svg' class=\"destacado__imagen\"></div>";
    }
}

export { encuestas };