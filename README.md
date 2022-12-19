## TEMPLATE WEBSITE LARAVEL

- Clonamos el repositorio
- Creamos la base de datos en mysql, con nombre ubicado en .env(***DB_DATABASE***)
- Configuramos la base de datos en el archivo ***.env***. Realizamos las migraciones 
```sh
php artisan migrate
```
- Configuramos las variables de entorno
    - GITHUB_API_URL
    - GITHUB_API_TOKEN
- Cargamos por primera vez los repositorios
```sh
php artisan command:update
```
- Configuramos las datos del servidor de correos
- Iniciamos el servidor de desarrollo
```sh
php artisan serve
```
- Editar la vista index.blade.php a tu gusto
#### Nota:
En caso de querer editar los estilos ejecutamos
```sh
npm i
```
y posteriormente, ejecutamos vite
```sh
npm run dev
```

De modo que podemos editar el archivo .scss, terminando ejecutamos 
```sh
npm run build
```

## Vista previa
#### Vista inicial
![](/assets/home.png)
#### Proyectos
![](/assets/projects.png)
#### Repositorios
![](/assets/repositories.png)
#### Contacto
![](/assets/contact.png)
