const evaluar = (objeto) => {
    return Object.prototype.toString.call(objeto);
};

const isObject = (objeto) => {
    return evaluar(objeto) === "[object Object]";
}

// Obteniene los datos en formato Markdown y llama a la función 
// procesar datos para devolver un JSON:
const obtenerDatos = async (ruta) => {
    let datos = await fetch(ruta)
        .then(respuesta => respuesta.text())
        .then(data => {
            return procesarDatos(data);
        });

    return datos;
}

// Crea un array de objetos:
const procesarDatos = (data) => {
    const expresion = /([\#]+)([a-z\s]+)(\W|[a-z])+$/gim;
    let contenido = data.replace(expresion, "");

    // Separador numérico:
    let separadorNumerico = /^([0-9]+)(\.)/im;

    const datos = contenido
        .split(separadorNumerico)
        .filter(valor => {
            let elemento = valor.replace(".", "");

            return isNaN(Number(elemento));
        })
        .map(elemento => {
            return elemento.trim().replaceAll("\n", "");
        });

    const preguntas = [];

    for (let pregunta of datos) {
        preguntas.push(pregunta.split("-").map((string, i) => {
            string = string.trim().replace(/(\.)$/, "");
            return string;
        }));
    }

    const encuesta = [];

    for (let [pregunta, ...opciones] of preguntas) {
        let objeto = {
            pregunta: pregunta,
            opciones: [...opciones]
        };

        encuesta.push(objeto);
    }

    return encuesta;
}

export { obtenerDatos };