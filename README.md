# Tienda Virtual PHP y MySQL

Este es un proyecto de **Tienda Virtual** desarrollado con **PHP** y **MySQL**. Permite gestionar productos, usuarios y realizar compras en línea.

## Requisitos

Para ejecutar el proyecto correctamente, asegúrate de tener los siguientes requisitos:

- **PHP** 7.x o superior
- **MySQL** 5.x o superior
- Servidor web (como **Apache** o **Nginx**)
- **Composer** (opcional para gestionar dependencias)

## Instalación

Sigue estos pasos para instalar y ejecutar la tienda virtual en tu máquina local:

1. **Clona el Repositorio:**

   Clona el repositorio en tu máquina local usando el siguiente comando:

   ```bash
   git clone https://github.com/Sava-1206/tienda_virtual.git

2. **Configurar la Base de Datos:**

Crea una base de datos en tu servidor MySQL.
Si tienes un archivo .sql con las tablas necesarias, impórtalo en tu base de datos.
Si no tienes el archivo .sql, puedes crear las tablas manualmente según lo que necesite el proyecto.

3. **Configurar la Conexión a la Base de Datos:**

Abre el archivo config.php o el archivo de configuración correspondiente, y modifica los parámetros de conexión a la base de datos según tu configuración:

+ $host = "localhost";  // Cambiar si usas un servidor remoto
+ $usuario = "root";     // Cambiar por tu usuario de MySQL
+ $password = "";        // Cambiar por tu contraseña de MySQL
+ $database = "tienda";  // Cambiar por el nombre de tu base de datos

Configurar el Servidor Web: Si estás usando Apache, asegúrate de que el archivo .htaccess esté configurado correctamente. 

## Usos
**Accede a la Aplicación:**

Abre tu navegador y dirígete a http://localhost/tienda_virtual/public (o la URL correspondiente si usas un servidor diferente).

**Funcionalidades:**

- Registro de Productos: Puedes añadir productos a la tienda con información como nombre, descripción, precio y cantidad.
- Creación de Producots: Pueden agregar productos con su nombre, descripción, precio y cantidad.
- Editar productos: Pueden actualizar los productos.
-Eliminar producto: Pueden realizar eliminación de los productos que desea borrar.
