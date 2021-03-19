# PruebaTecnica PHP-Web_Service

Se desarrollo un API en el framework de laravel, que realiza el consumo de un Web-Service.


Se creo un nuevo proyecto en Laravel y se implemento una vista (home.blade.php) para mostrar los resultados de los metodos get,put,post y delete cada uno en un boton realizando la tarea correspondiente.

Para realizar estas tareas se creo un Controlador (DemoController.php) que atravez de un HTTP Client y sus funciones(get,post,put,delete) consumen el API dada, donde por medio del archivo de rutas (Web.php) lo redirigimos para que estas funciones del nuevo controlador se ejecuten sin problema, y se creo un JavaScript para redirigir y ejecutar esta informacion desde el front hata el back y viceversa.
