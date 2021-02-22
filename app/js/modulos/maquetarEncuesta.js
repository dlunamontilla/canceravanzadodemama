const agregarCero = (numero) => {
  return (numero < 10) ? "0" + numero : "" + numero;
};

const maquetarEncuesta = (json) => {
  // No seguir si lo que se pasa como parámetro no es un array:
  if (!Array.isArray(json))
    return;

  const encuesta = document.createElement("div"),
    tarjeta = document.createElement("div"),
    caption = document.createElement("div"),
    title = document.createElement("h2"),
    opciones = document.createElement("label"),
    select = document.createElement("select"),
    option = document.createElement("option");

  // Asignarle una clase a los elementos de la tarjeta:
  encuesta.classList.add("encuesta");
  tarjeta.classList.add("encuesta__item");
  caption.classList.add("encuesta__caption");
  title.classList.add("encuesta__title");
  opciones.classList.add("encuesta__opciones");
  select.classList.add("encuesta__select");

  json.forEach((bloque, indice) => {
    let [
      tarjetaClon,
      captionClon,
      titleClon,
      opcionesClon,
      selectBox
    ] = [
        tarjeta.cloneNode(false),
        caption.cloneNode(false),
        title.cloneNode(false),
        opciones.cloneNode(false),
        select.cloneNode(false)
      ];

    titleClon.textContent = bloque.pregunta;
    captionClon.appendChild(titleClon);

    let id = `pregunta${agregarCero(indice + 1)}`;

    opcionesClon.setAttribute("for", id);
    selectBox.id = id;
    selectBox.name = id;


    let seleccione = option.cloneNode(false);
    seleccione.value = "";
    seleccione.textContent = "--Elija una opción--";

    selectBox.appendChild(seleccione);

    bloque.opciones.forEach((label, indice) => {
      let op = option.cloneNode(false);
      op.textContent = label;
      op.value = indice + 1;

      selectBox.appendChild(op);
    });

    // Ensamblando las tarjetas de opciones:
    opcionesClon.appendChild(selectBox);
    tarjetaClon.append(captionClon, opcionesClon);

    encuesta.appendChild(tarjetaClon);

  });

  return encuesta;
}
export { maquetarEncuesta };