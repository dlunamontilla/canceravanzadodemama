import { elemento } from "./elementos.js";
import { obtenerDatos } from "./obtenerDatos.js";
import { maquetarEncuesta } from "./maquetarEncuesta.js";
import { isSelect, isLabel, isForm } from "./evaluar.js";

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
      ruta: "recursos/markdown/encuesta.md",
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
    contenedor.innerHTML = "";

    // Formulario desde se enviará la encuesta:
    const formulario = document.createElement("form");
    formulario.setAttribute("action", "app/ajax/?encuesta");
    formulario.setAttribute("method", "post");

    // Botón de envío de la encuesta:
    const button = document.createElement("button");
    const etiqueta = document.createTextNode("Completar encuesta");
    const aviso = document.createTextNode("Enviando encuesta...");
    const plantilla = elemento("#carga");

    button.appendChild(etiqueta);
    button.classList.add("button", "button--success", "button--encuesta", "g-recaptcha");

    button.setAttribute("type", "submit");

    // Contenedor del botón:
    const groupButton = document.createElement("div");
    groupButton.classList.add("group-button", "group-button--encuesta");

    const mensaje = document.createElement("div");
    mensaje.classList.add("mensaje");

    groupButton.append(mensaje, button);

    if (contenedor === null)
      return;

    contenedor.classList.add("modal__content--claro")

    // Pintar los elementos en el DOM:
    formulario.textContent = "";
    formulario.append(html, groupButton);

    const hidden = document.createElement("input");
    hidden.setAttribute("type", "hidden");
    hidden.setAttribute("name", "Google");
    formulario.appendChild(hidden);

    contenedor.textContent = "";
    contenedor.appendChild(formulario);


    // Proteger utilizando reCAPTCHA de Google:
    function onClick(e) {
      e.preventDefault();

      // Avisar al usuario de que se está enviando la encuesta:
      button.textContent = "";
      if (plantilla !== null)
        button.appendChild(plantilla.content.cloneNode(true));

      button.appendChild(aviso);

      grecaptcha.ready(function () {
        grecaptcha.execute('6LfNtGkaAAAAAIqyVvHYXYWm2zXUR9JN3XuiXpMy', { action: 'submit' }).then(function (token) {
          // Obtener el token generados por los servidores de Google:
          hidden.value = token;

          // Modo de envío de formulario:
          if (!("action" in formulario)) return;

          let form = new FormData(e.target);
          const config = {
            method: "POST",
            body: form
          };

          fetch(formulario.action, config)
            .then(respuesta => respuesta.json())
            .then(data => {
              // Notificar al usuario que su encuesta fue enviada:
              mensaje.textContent = data.mensaje;

              // Marcar si se produjo o no un error:
              let marcar = data.error ? "mensaje--error" : "mensaje--success";
              mensaje.classList.add(marcar);

              // Actualizar el estado del botón:
              button.disabled = true;
              button.textContent = "";
              button.appendChild(etiqueta);

              // Borrar el texto donde se le notificó al usuario 
              // que su encuesta ha sido enviada:
              setTimeout(function () {
                mensaje.textContent = "";
              }, 7000);

              // Limpiar los campos del formulario:
              e.target.reset();
            });
        });
      });
    }


    formulario.addEventListener("submit", (e) => {
      onClick(e);
    }, false);
  }
}

export { encuestas };