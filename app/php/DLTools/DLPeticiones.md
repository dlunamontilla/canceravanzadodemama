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



## Devolver una cadena en función de un módulo

Para devolver una cadena en función de un módulo puede considerar lo siguiente:

``` php
$cadena = $get->cadena("modulo", "Cadena a devolver en función del módulo elegido");

echo $cadena;
```

El resultado será:

``` none
Cadena a devolver en función del módulo elegido
```

Si en la barra de direcciones del navegador tiene el siguiente parámetro:

``` none
https://tusitioweb.com/?modulo
```