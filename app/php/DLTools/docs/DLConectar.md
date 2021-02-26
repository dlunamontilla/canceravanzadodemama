# Parámetros de conexión

Para utilizar, debe escribir la siguiente línea:

```php
$conexion = new DLConectar("/ruta/.env/");
```

Para luego obtener el objeto `PDO`:

```php
$pdo = $conexion->obtenerPDO();
```
