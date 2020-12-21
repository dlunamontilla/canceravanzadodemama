# Cáncer Avanzado de Mama

Este sitio Web consta los siguientes módulos principales:

* Inicio.
* Nosotros.
* Herramientas para la toma de decisiones.
* Conozca su enfermedad.
* La paciente y su proceso.


## Recursos

Si se encuentra en `Linux`, para transpilar (análogo a compilar) el proyecto de forma dinámica mientras modifica los archivos `scss`, a la vez, que desea lanzar un servidor Web solo tiene que escribir dentro del proyecto lo siguiente:

``` bash
make
```

Y luego presione `ENTER`.

Luego de eso, diríjase al navegador de su preferencia y escriba en la barra de direcciones:

``` none
http://localhost:1100
```


## Estructura de la apariencia

### Estilos

Los estilos aplicados al sitio Web se encuentran ubicados, según el caso, en las siguientes rutas:

+ Estilos predeterminados:
    ``` none
    recursos/activos/sass/_default.scss
    ```

+ Estilos en la página principal:
    ``` none
    recursos/activos/sass/_main.scss
    ```

    Si bien, aplica a todo el sitio Web, son los que definen principal para la parte que visita el usuario que no administra el sitio Web.

+ Estilos aplicados en el panel de administración:
    ``` none
    recursos/activos/sass/_panel.scss
    ```

### Colores

Los colores se encuentra definidos en los siguientes ficheros (archivos):

``` none
recursos/activos/sass/_vars.scss
```

Y

```none
recursos/activos/sass/_colors.scss
```

### Animaciones

Las animaciones se encuentran definidos en el siguiente archivo:

``` none
recursos/activos/sass/_animations.scss
```

## Estructura

El sitio Web está estructurado de la siguiente forma:

``` none
Sitio Web
  + app/
  + multimedia/
  + recursos/
  + vista/

  index.php
  sitemap.xml
```

### Descripción de cada directorio.

**`app/`:**
El directorio `app/` es la más importante del sitio Web. En ella se encuentra prácticamente toda la estructura principal y contenido.

El directorio `app` contiene principalmente código `PHP` y `JavaScript`.

Su estructura es ésta:

``` none
app
  + php/
    + DLTools
    + modulos
    + panel

  + js/
```

**`DLTools`** es una biblioteca que está siendo utilizada por el sitio Web. Dicha biblioteca que contiene una serie de módulos y clases con el propósito de facilitar el trabajo general de desarrollo. Fue desarrollada por *David E Luna M*.

La biblioteca se libera bajo la licencia MIT.

**`modulos`** es parte esencial del sitio Web. Utiliza la biblioteca **DLTools.** Su estructura está basado en componentes que estará utilizando en función de qué parte del sitio Web se encuentre navegando el usuario. 


#### Descripción del archivo que se encuentran dentro del directorio **`modulo`**

