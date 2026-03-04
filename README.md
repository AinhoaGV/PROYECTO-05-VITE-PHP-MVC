#REGLAS DE INSTALACIÓN DE ESTE PROYECTO


1. Descargar el proyecto de GitHub


Descargar el proyecto de GitHub. Clonamos el proyecto en nuestro VSC.


2. Borrar la carpeta .git de existir. Recuerda configurar tu explorador de archivos para que permita ver elementos ocultos para ello.

3. Instalar las dependencias de composer y nom.


- Instalación dependencias de PHP


```bash
composer update
```


- Instalación de dependencias de javascript (node modules)


```bash
npm install
```


4. Creación del archivo enviroment (.env) utilizando como base env.txt y añadimos las variables de entorno.


```bash
#CONFIGURACIÓN HOST DE DESARROLLO / PRODUCCIÓN
# Las rutas no deben terminar con "/"
RUTA=http://localhost:3000
#RUTA=
 
# poner en 0 cuando esté en producción para no mostrar errores PHP en el navegador de producción
# poner en 1 mientras se esté en desarrollo, o cuan do se suba a producción para verificar que no hay errores.
DISPLAY_ERRORS=1
 
LANG_DEFAULT=es
 
# CREDENCIALES DE PHP MAILER (envioPhpMailer.php)
USERNAME=
PASS=
HOST=
 
# CONFIGURACIÓN DE CORREOS DE ESTE PROYECTO (gestionForm.php)
EMAIL_WEB=
EMAIL_ADMIN=
 
# credenciales de la BBDD
BBDD_HOST=
# BBDD_HOST=localhost
BBDD_USER=
BBDD_PASS=
BBDD_BBDD=
```

5. Asegurarnos de que en .gitignore esté el .env. Como aquí:

```text
.env
/vendor
/node_modules
/assets/dist
```

6. Iniciar servidor:

```bash
    npm run start
```

La cual unifica en package.json la llamada a front y back que hariamos en dos terminales:

```bash
    npm run dev
```

```bash
    php -S localhost:8000
```

7. Y accedemos a http://localhost:3000/


