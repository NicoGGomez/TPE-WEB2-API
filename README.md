# TPE-WEB2-API

Esta API proporciona funcionalidades para administrar productos de una tienda de indumentaria deportiva. Utiliza PHP y MySQL para manejar las operaciones.

## Importar la Base de Datos
1. Crea una base de datos llamada `db_tiendaderopa` en MySQL.
2. Importa la estructura y datos desde el archivo `db_tiendaderopa.sql` mediante PHPMyAdmin u otra herramienta similar.

### Endpoints

#### Obtener Todos los Productos
- **Descripción**: Obtiene todos los productos.
- **Método**: GET
- **Endpoint**: `http://localhost/TPE-WEB2-API/api/productos`

#### Obtener Producto por ID
- **Descripción**: Obtiene un producto por su ID.
- **Método**: GET
- **Endpoint**: `http://localhost/TPE-WEB2-API/api/productos/{id}`

#### Ordenar Productos
- **Descripción**: Obtiene productos ordenados por columna y dirección.
- **Método**: GET
- **Endpoint**: `http://localhost/TPE-WEB2-API/api/productos/?sortby={columna}&order={ASC o DESC}`
    - Ejemplos:
        - `http://localhost/TPE-WEB2-API/api/productos/?sortby=id_producto&order=DESC`
        - `http://localhost/TPE-WEB2-API/api/productos/?sortby=precio&order=ASC`
        - `http://localhost/TPE-WEB2-API/api/productos/?sortby=tipo&order=DESC`

#### Crear Producto
- **Descripción**: Crea un nuevo producto.
- **Método**: POST
- **Endpoint**: `http://localhost/TPE-WEB2-API/api/productos`
- **Body (JSON)**: 
    ```json
    {
        "id_categoria": "numero de categoria",
        "tipo": "tipo de prenda",
        "talle": "tamaño de la prenda",
        "precio": "precio de la prenda"
    }
    ```

#### Actualizar Producto
- **Descripción**: Actualiza un producto por su ID.
- **Método**: PUT
- **Endpoint**: `http://localhost/TPE-WEB2-API/api/productos/{id}`
- **Body (JSON)**: 
    ```json
    {
        "id_categoria": "numero de categoria",
        "tipo": "tipo de prenda",
        "talle": "tamaño de la prenda",
        "precio": "precio de la prenda"
    }
    ```
