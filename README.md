#####  PRUEBA HEYFOOD API



#### Instalar proyecto

<pre>composer install
</pre>

#### .ENV ( Configurar variables de entorno en .env )

<pre>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelApi
DB_USERNAME=root
DB_PASSWORD=
</pre>
#### .Crear las tablas que utilizara la API
<pre>
php artisan migrate
</pre>

#### .Crear datos de prueba y usuario de prueba para autentificacion 
<pre>
php artisan db:seed
</pre>

#### .Inicializar proyecto
<pre>php artisan serve
</pre>

#### .Documentación API
- 'Accept: application/json';

#### Obtención de token de autentificacion (POST)

##### Request

<pre>http://localhost:8000/api/loginApi

	curl --location --request POST 'http://localhost:8000/api/loginApi' \
--header 'Content-Type: application/json' \
--data-raw '{"email":"test@test.cl"}'
</pre>



##### Response

<pre>{
    "token": "3|zkwYb1xrCJUwNhQBHtIAAgVzFPXAHqBD5iQCw2Us"
}
</pre>



#### Obtención de recetas (GET)

##### Request

<pre>http://localhost:8000/api/recetas

curl --location --request GET 'http://localhost:8000/api/recetas' \
--header 'accept: application/json' \
--header 'Authorization: Bearer {tokenAutentificacion}'
</pre>

##### Response

<pre>[
    {
        "id": 1,
        "id_pocion": 1,
        "ingrediente": "Petalos",
        "cantidad": 0.2,
        "precio": 2000,
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 2,
        "id_pocion": 1,
        "ingrediente": "Sal de mar",
        "cantidad": 0.1,
        "precio": 3000,
        "created_at": null,
        "updated_at": null
    },
]
</pre>

#### Agregar nueva receta (POST)
##### Request

<pre>http://localhost:8000/api/recetas

curl --location --request POST 'http://localhost:8000/api/recetas' \
--header 'Authorization: Bearer {tokenAutentificacion}' \
--header 'Content-Type: application/json' \
--data-raw '{
    "id_pocion": 2,
    "ingrediente": "fuego",
    "cantidad": 0.2,
    "precio": 1000}'
</pre>

##### Response

<pre>"Receta agregada con exito"
</pre>

#### Editar una receta (PUT)

##### Request

Parametro Id sera la receta a editar
<pre>http://localhost:8000/api/recetas/{id}/

curl --location --request PUT 'http://localhost:8000/api/recetas/{id}' \
--header 'Authorization: Bearer {tokenAutentificacion}' \
--header 'Content-Type: application/json' \
--data-raw '{
    "id_pocion": 2,
    "ingrediente": "Hielo",
    "cantidad": 0.2,
    "precio": 12345}'
</pre>

##### Response

<pre>"Receta actualizada con exito"
</pre>

#### Editar una receta (DELETE)

##### Request

Parametro Id sera la receta a editar
<pre>http://localhost:8000/api/recetas/{id}/

curl --location --request DELETE 'http://localhost:8000/api/recetas/{id}' \
--header 'Authorization: Bearer {tokenAutentificacion}'
</pre>

##### Response
<pre>"Receta eliminada con exito"
</pre>
