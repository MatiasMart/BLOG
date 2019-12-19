# MI Blog de viajero 

Este blog es una web donde yo subo toda la informacion sobre mis viajes tanto asi como informacion relacionada a estos.

Modo de Uso
(Los siguientes pasos deben ser ejecutados desde la consola ubicados en la carpeta del proyecto)
## 1- Lo Primero que debemos hacer es  clonar repositorio de manera local haciendo .

```
$ git clone https://github.com/MatiasMart/BLOG.git 
```

Y luego debemos instalar composer.

```
composer install
```

## 2- Luego debemos crear una base de datos y modificar el archivo .env.example quitandole el (.exaple) del nombre,  dentro del mismo debemos cambiar el nombre de la base de datos que por defecto viene "mysql" por el nombre de la base de datos que nosotros hayamos creado.

## 3- Una ves realizado el paso dos debemos generar una key encriptada que sera almacenada en nuestro .env. Para ello debemos ejecutar el siguiente comando

```
php artisan key:generate
```

## 4- Y por ultimo debemos ejecutar los migration para crear todas las tablas de nuestra base de datos y los seeds que contienen informacion para esas tablas.

```
php artisan migrate

php artisan db:seed 
```

## 5- Para poder visualizar las imagenes con las que viene el proyecto debemos ejecutar este comando 

```
php artisan storage:link
```

## 6- Para utilizar el servidor que ya viene en laravel debemos ejecutar.

```
php artisan serv.
```

## 7-Una vez realizados todos estos pásos debemos ingresar a nuestro navegador e ingresar a la ruta:

```
`localhost:8000`.
```


Los datos del usario administrador son:

*** 
Email:     admin@admin.com
Password:  admin1234.
***
