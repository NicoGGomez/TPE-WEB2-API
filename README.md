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
        - `http://localhost/tp2-apirest/api/products/?sortby=id_producto&order=DESC`
        - `http://localhost/tp2-apirest/api/products/?sortby=precio&order=ASC`
        - `http://localhost/tp2-apirest/api/products/?sortby=tipo&order=DESC`

#### Crear Producto
- **Descripción**: Crea un nuevo producto.
- **Método**: POST
- **Endpoint**: `http://localhost/tp2-apirest/api/products`
- **Body (JSON)**: 
    ```json
    {
        "id_categoria": 6,
        "tipo": "remera",
        "talle": "XL",
        "precio": 3000
    }
    ```



