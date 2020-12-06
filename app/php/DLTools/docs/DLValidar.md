# Uso de la clase DLValidar

Para validar una cadena debe instanciarla primero escribiendo algo parecido a esto:

``` php
$validar = new DLValidar();
```

### Validación de contraseña:

Sintaxis para validar contraseñas:

``` php
if ( $validar->password( "contraseña" ) ) {
  # Se ejecuta estas instrucciones 
  # si la contraseña es válida.
}
```

### Validación de correo electrónico:

Sintaxis para validar correo electrónico:

``` php
if ( $validar->email( "correo@ejemplo.com" )) {
  # Instrucciones que se ejecutarán si el 
  # correo introducido es válido.
}
```
