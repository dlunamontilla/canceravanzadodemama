# Uso de la clase **DLPeticiones**

Para empezar, debemos instanciar la clase:

Para utilizarlo con el método `POST` :

``` php
// Para el método POST:
$post = new DLPeticiones( "post" );
```

O para utilizarlo con el método `GET` :

``` php
// Para el método POST:
$post = new DLPeticiones( "get" );
```

Luego, crear un array:

``` php
$peticiones = [
  "correo" => false,
  "textoOpcional" => true,
  "nombres" => false
];
```

**Por lo tanto:**

* `false` : hace obligatorio una petición con contenido.

* `true` : permite que la petición se envíe con o sin contenido.

Finalmente, validamos las peticiones:

Mediante el método `POST` :

``` php
if ( $post -> validar( $peticiones ) ) {
  # Instrucciones que se ejecutan tras la 
  # validación de las peticiones.
}
```

Mediante el método `GET` :

``` php
if ( $get -> validar( $peticiones ) ) {
  # Instrucciones que se ejecutan tras la 
  # validación de las peticiones.
}
```

## Módulo de un solo parámetro

Para establecer un contenido determinado en función de un módulo con un solo parámetro se debe considerar utilizar el método `DLPeticiones::modulo("modulo")` .

**Mediante el método `POST`:**

``` php
if ( $post->modulo("modulo") ) {
  // Instrucciones que se ejecutarán cuando el 
  // usuario acceda al módulo "modulo".
}
```

**Mediante el método `GET`:**
``` php
if ( $get->modulo("modulo") ) {
  // Instrucciones que se ejecutarán cuando el
  // usuario acceda al módulo "modulo".
}
```

## Devolver una cadena en función de uno o varios parámetros

Si en la barra de direcciones del navegador tiene el siguiente parámetro:

``` none
https://tusitioweb.com/?parametro
```

Para devolver una cadena en función de ese parámetro puede escribir:

``` php
$cadena = $get->cadena("parametro", "Cadena a devolver en función del módulo elegido");

echo $cadena;
```

También es posible utilizando la petición `POST`, pero es un poco inusual hacer. Sin embargo, la sintaxis es la misma que la anterior.

> **Nota:** `$get` es la instancia de la clase `DLPeticiones`. Es decir:
>``` php
> // Para una petición POST:
> $post = new DLPeticiones( "post" );
>
> // O para una petición GET:
> $get = new DLPeticiones( "get" );
>```

El resultado será:

``` none
Cadena a devolver en función del módulo elegido
```

Si tiene el siguiente parámetro en el navegador:

``` none
https://tusitioweb.com/?parametro1&parametro2&parametro3=1
```

Y desea que con ello devuelva una cadena específica solo tendría que defnirla así:

``` php
$parametros = [
  "parametro1" => true,
  "parametro2" => true,
  "parametro3" => false
];

$get-> cadena($parametros, "Una cadena de texto");
```

Dando como resultado:

``` php
// Una cadena de texto
```

En el caso anterior, al definir `parametro => true` significa que el valor que pueda tener es opcional, es decir, que puede ser `parametro1=valor` o simplemente `parametro1`. 

Cuando se define como `false` significa que es obligatorio establecer un valor. Es decir, no es opcional.


## Devolver el mismo contenido en submódulos o páginas seleccionadas

Para distribuir contenido en diferentes submódulos o páginas podrías considerar escribir la siguiente sintaxis:

``` php
$modulos = [
  "modulo1",
  "modulo2",
  "modulo3",
  ...
  "moduloN"
];

if ($get->distribuirEnModulos($modulos)) {
  # Contenido que desee que distribuya en los módulos señalados en el 
  # en el array $modulos
}
```

Y si desea incluir submódulos donde los parámetros tienen algún valor, puede escribir:

``` php
$modulos = [
  "modulo1",
  "modulo2",
  
  "modulo3" => [
    "modulo3" => true,
    "id" => false
  ],

  ...
  "moduloN"
];

if ( $get-distribuirEnModulos($modulos)) {
  # El contenido que distribuirá en los módulos señalados.
}
```