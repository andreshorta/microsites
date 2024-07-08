# Proyecto "Microsites"

Este proyecto permite a los administradores crear y gestionar micrositios para diferentes tipos de pagos (facturas, suscripciones, donaciones), y facilita a los usuarios la realización de pagos de manera fácil y segura.

Nota: el proyecto está en proceso de construcción y el avance fue muy poco. Mil disculpas!


## Requisitos

- Laravel >= 11
- PHP >= 8.2
- Composer
- breeze
- Node.js
- NPM
- Git

## Instalación local

Sigue estos pasos para configurar el proyecto en tu entorno local:

1. Clona el repositorio:
    ```bash
    git clone https://github.com/tu-usuario/tu-repositorio.git
    ```

2. Navega al directorio del proyecto:
    ```bash
    cd tu-repositorio
    ```

3. Instala las dependencias de PHP:
    ```bash
    composer install
    ```

4. Instala Laravel Breeze con Blade:
    ```bash
    php artisan breeze:install Blade
    ```

5. Instala las dependencias de Node.js:
    ```bash
    npm install
    ```

6. Copia el archivo de configuración de ejemplo:
    ```bash
    cp .env.example .env
    ```

7. Configura la base de datos en el archivo `.env`:
    Abre el archivo `.env` y actualiza las siguientes variables con tus credenciales de base de datos:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_base_de_datos
    DB_USERNAME=usuario
    DB_PASSWORD=contraseña
    ```

8. Genera una clave de aplicación:
    ```bash
    php artisan key:generate
    ```
9. Realiza la migración de la base de datos:
    ```bash
    php artisan migrate
    ```

10. En una nueva terminal, compila los activos del frontend:
    ```bash
    npm run dev
    ```

11. Inicia el servidor de desarrollo de Laravel:
    ```bash
    php artisan serve
    ```

El proyecto ahora debería estar corriendo en tu entorno local y accesible en `http://localhost:8000`.





