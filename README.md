# prueba_ND

# Guía para montar el proyecto Laravel

Para poder montar el proyecto sin dificultades, sigue los pasos descritos a continuación.

---

## 1. Instalar PHP de forma global

### Opción A: Ya tienes XAMPP instalado
- Pasa directamente al paso 2: [Agregar PHP al PATH](#2-agregar-php-al-path).

### Opción B: No tienes XAMPP instalado
1. Accede al siguiente enlace: [https://windows.php.net/download](https://windows.php.net/download).
2. Descarga la versión **Thread Safe ZIP** (por ejemplo: `php-8.2.17-Win32-vs16-x64.zip`).
3. Extrae los archivos del ZIP en una carpeta, por ejemplo: `C:\php`.

---

## 2. Agregar PHP al PATH

1. Ve a `Panel de control > Sistema > Configuración avanzada del sistema > Variables de entorno`.
2. En **"Variables del sistema"**, selecciona `Path` > `Editar`.
3. Agrega la siguiente ruta:  
4. Acepta y reinicia tu terminal (cmd o PowerShell).

---

## 3. Montar el Proyecto

1. Una vez que PHP esté instalado de forma global, descarga el proyecto desde el repositorio o ubicación correspondiente.

---

## 4. Instalar las dependencias de Laravel

1. Abre la terminal dentro de la carpeta del proyecto.
2. Ejecuta el siguiente comando para instalar las dependencias de PHP:
composer install
node_modules


---

## 5. Agregar la conexión a la base de datos

1. Crea un archivo llamado `.env` en la raíz del proyecto.
2. Copia el contenido del archivo `.env.example` al nuevo archivo `.env`.

## 6. Levanta el servidor

1. Usando el comando php artisan serve

---

¡Listo! Ya puedes comenzar a trabajar con el proyecto Laravel.
