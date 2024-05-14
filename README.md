**Proyecto web de comercio electrónico**
-------------------------

Este proyecto es una aplicación web de comercio electrónico construido usando HTML, CSS, Bootstrap, PHP y MySQL.

**Estructura del proyecto
--------------------

* **index.php**: El punto de entrada principal de la aplicación
**INCLUDES**: Carpeta que contiene las plantillas HTML de la aplicación
	+ **header-compra.php**: Plantilla de cabecera para el carrito de Compras
	+ **footer.php**: Plantilla de pie de página
	+ **header.php**: Plantilla de la página de inicio
	+ **navbar.php**: Plantilla de página de producto
	+ **cart.php**: Plantilla de la página del carrito
	+ **checkout.php**: Checkout page template
**css**: Carpeta que contiene los archivos CSS
	+ **style.css**: Hoja de estilo principal
**js**: Carpeta que contiene los archivos JavaScript
	+ **App.js**: Archivo script principal
    + **main.js**: Código para hacer pruebas
* **php**: Carpeta que contiene archivos PHP
	+ **component.php**: Carpeta que contiene los archivos de creacion de los componentes
		- **creadb.php**: Configuración de la conexión a la base de datos asi como la creación de un punto de restauracion.
	+ **database**: Carpeta que contiene los archivos de la base de datos
		- Base de datos.php**: Funciones de conexión y consulta de la base de datos
	+ **modelos**: Carpeta que contiene archivos de lógica de negocio
		- **Producto.php**: Funciones de gestión de productos
		- **Cart.php**: Funciones de gestión del carrito
		- Pedidos.php**: Funciones de gestión de pedidos
	+ **controladores**: Carpeta que contiene los archivos de los controladores
		- **ControladorProducto.php**: Controlador de productos
		- **CartController.php**: Controlador de carrito
		- ControladorPedidos.php**: Controlador de pedidos
**IMG**: Carpeta que contiene las imágenes de la aplicación
* Base de datos Carpeta que contiene los archivos de la base de datos MySQL
	+ **ElPonyWeb.sql**: Archivo de esquema de la base de datos