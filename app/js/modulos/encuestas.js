import { elemento } from "./elementos.js";
import { obtenerDatos } from "./obtenerDatos.js";
import { maquetarEncuesta } from "./maquetarEncuesta.js";
import { isSelect, isLabel } from "./evaluar.js";

const encuestas = (selector) => {
  if (typeof selector === "undefined")
    return;

  let boton = elemento(selector);
  if (boton === null) return;

  boton.onclick = () => {
    if (
      modal === null ||
      modalTitle === null
    ) {
      return;
    }

    modal.classList.add("modal--show");
    modalTitle.textContent = "¿Qué sabes del Cáncer de Mama?";

    const modalContent = elemento(".modal__content");
    if (modalContent === null) return;

    // Construir encuesta a partir del archivo Markdown
    construir({
      ruta: "recursos/markdown/enuesta.md",
      selector: "#modal-content"
    });

    // Quitar barra de desplazamiento del cuerpo:
    document.body.setAttribute("style", "overflow: hidden");
  }

  // Crear una encuesta:
  const construir = async (objeto) => {
    const { ruta, selector } = objeto;

    let json = await obtenerDatos(ruta);

    if (!Array.isArray(json))
      return;

    const html = maquetarEncuesta(json);

    // Contenedor de los elementos de la encuesta:
    const contenedor = document.querySelector(selector);

    if (contenedor === null)
      return;

    contenedor.classList.add("modal__content--claro")
    contenedor.innerHTML = "";
    contenedor.appendChild(html);


    contenedor.addEventListener("change", (e) => {
      console.log(e.target.querySelectorAll("option")[e.target.value].textContent);
    }, false);

    // 
    contenedor.addEventListener("click", e => {
      e.preventDefault();

      if (!isLabel(e.target))
        return;

      const select = e.target.querySelector("select");

      if (isSelect(select)) {
        select.click();
        console.log(e.target, select);
      }
    }, false);
  }
}

export { encuestas };