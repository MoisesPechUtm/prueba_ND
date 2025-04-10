# Guía para montar el proyecto Laravel — *Prueba_ND*


## 1. Instalar PHP de forma global

### Opción A: Ya tienes XAMPP instalado  
Sáltate este paso y ve directo al siguiente  [Agregar PHP al PATH](#2-agregar-php-al-path)

### Opción B: No tienes XAMPP instalado  
Sigue estos pasos:

1. Abre este link para instalar PHP: [https://windows.php.net/download](https://windows.php.net/download)
2. Busca una versión que diga **Thread Safe ZIP** (por ejemplo: `php-8.2.17-Win32-vs16-x64.zip`)
3. Descarga y descomprime ese ZIP en una carpeta, por ejemplo: `C:\php`

---

## 2. Agregar PHP al PATH

Este paso es clave para que puedas usar `php` desde cualquier terminal.

1. Ve a: `Panel de control > Sistema > Configuración avanzada del sistema > Variables de entorno`
2. Busca la parte que dice **"Variables del sistema"**, selecciona `Path` y dale clic en `Editar`
3. Ahí agrega la ruta donde tienes PHP, por ejemplo: `C:\php` o si usas XAMPP: `C:\xampp\php`
4. Acepta todo y reinicia tu terminal (ya sea CMD o PowerShell)

---

## 3. Montar el Proyecto

1. Descarga el proyecto desde el repositorio
2. Descomprime o clónalo 

---

## 4. Instalar las dependencias de Laravel

Con el proyecto abierto:

1. Abre la terminal dentro de la carpeta del proyecto 
2. Escribe `composer install` para descargar las dependencias de PHP
3. Luego escribe `npm install` para instalar la carpeta de `node_modules` 

---

## 5. Crear la conexión a la base de datos

1. En la raíz del proyecto, crea un archivo llamado `.env`
2. Copia todo lo que está en `.env.example` y pégalo en ese nuevo `.env`
3. No se necesita cambios, ya que se usa SQlite como base de datos, esta ya viene dentro del proyecto

---

## 6. Levanta el servidor

Ya con todo en orden:

1. Ejecuta en la terminal el comando `php artisan serve`
2. Accede a la url que proporciona el servidor para poder visualizar el proyecto 

