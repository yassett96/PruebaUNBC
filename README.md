## ======================================================= Instrucciones para levantar el proyecto localmente ========================================================================================
    1. Se debe de descargar el repositorio
    2. De ser necesario se debe de crear la base de datos en MySQL, para así tener conexión a nivel local. El transact para crearlo está en la raíz del proyecto.
        Si se decide de utilizar la base de datos con datos iniciales (Database_PruebaUNBC_EstructuraYDatos.sql) los usuarios creados son:
            - María Montiel
                Correo: mariamontiel@gmail.com
                Pass: Maria123
                
            - Samir Morales
                Correo: samirmorales@gmail.com
                Pass: Samir123
                
            - Eugenio Derbez
                Correo: euderbez@gmail.com
                Pass: Eugenio123

        Si se decide de utilizar la base de datos sin datos (Database_PruebaUNBC_SoloEstructura.sql) se debe de registrar un primer usuario en la pestaña de 'Register' una vez arrancado la aplicación

        La configuración para la ocnexión en el archivo .env viene de la sigueinte forma:
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=PruebaUNBC
            DB_USERNAME=root
            DB_PASSWORD=1234
        Puede ser necesario cambiar el password, puerto, host o username para la conexión, dependiendo como se tiene configurado en su local.            
    
    3. Se debe de asegurar de tener instalado npm, Tailwind y ejecutar la migración
        npm:
            npm install

        Tailwind:
            npm install -D tailwindcss@latest postcss@latest autoprefixer@latest
            npx tailwindcss init

        Ejecutar la migración:
            php artisan migrate        

    3. Una vez descargado e iniciado todo, se debe de ejecutar lo siguientes comandos para levantar la aplicación:
        a. npm run dev     (Para iniciar el servidor Vite)
        b. php artisan serve       (Para iniciar el servidor de la aplicación)    
    
    4. Se puede proceder a abrir en el navegador la ruta de localhost:[puerto] para poder probar la aplicación
## ==================================================================================================================================================================================================

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
