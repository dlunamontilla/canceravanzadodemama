const csvToJSON = (csv, operador = ",") => {
   // Registros es al salto de línea:
   let registros = csv.trim("\n").split("\n");

   // Campos de la primera línea:
   let campos = [];

   // Aquí se almacena todos los datos:
   const datos = [];


   // Recorremos cada línea
   registros.forEach((registro, indice) => {
      // Indicamos que la primera línea son los campos:
      if (indice === 0) {
         campos = registro.split(operador).map(campo => campo.trim());
      }

      // El resto de las líneas son los datos de cada registro:
      if (indice > 0) {
         // Separamos los datos de cada registro para incorporarlo
         // en los campos:
         let datosDeCampos = registro.split(operador);

         // Es un objeto de registro de datos (cada fila):
         let objeto = {};

         for (let indice in campos) {
            let informacion = datosDeCampos[indice].trim(" ");

            objeto[campos[indice]] = (isNaN(informacion))
               ? informacion
               : Number( informacion );
         }

         // Se almacena el objeto de registro en datos
         // para formar un array de objetos:
         datos.push(objeto);
      }
   });

   return datos;
};

export { csvToJSON };