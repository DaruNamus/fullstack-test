<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Setup
Menggunakan Laragon sebagai pembuat web lokal dengan menambahkan dan mengupdate Apache & PHP di dalamnya.

## Prasyarat
- **Laragon**
- **Apache**: [httpd-........-win64-VS17](https://www.apachelounge.com/download/VS17/)
- **PHP**: [php-8.3.16-Win32-vs16-x64](https://windows.php.net/downloads/releases/php-8.3.16-Win32-vs16-x64.zip)

## Penginstallan Apache
1. Buka direktori `C:\laragon\bin\apache`
2. Buat folder dengan nama versi Apache yang telah diunduh agar mudah dikenali
3. Ekstrak seluruh file yang ada di dalam folder `Apache24` dari file `httpd... .ZIP` yang telah diunduh ke folder yang telah dibuat
## Penginstallan PHP
1. Buka direktori `C:\laragon\bin\php`
2. Buat folder dengan nama versi PHP yang telah diunduh agar mudah dikenali
3. Ekstrak file `php... .ZIP` yang telah diunduh ke folder yang telah dibuat
## Mengaktifkan Ekstensi PHP
1. Buka file `php.ini` yang terdapat di dalam folder instalasi PHP
2. Tambahkan atau aktifkan ekstensi berikut:
   **'extension=zip'**
3. atau bisa dengan Right Click Laragon -> PHP -> Extension -> zip (buat jadi Checklist)
# Menjalankan Website
Buka 2 terminal Laragon
1. Jalankan perintah berikut untuk menjalankan server:
   php artisan serve
2. Jalankan perintah berikut untuk menjalankan proses build dan live reload:
   npm run dev
3. Buka browser dan akses ke `http://localhost:8000`

# Laravel Project Package Containt
- Laravel Breeze // Auth
- Laravel PowerGrid // Table Content
- maatwebsite/excel // Untuk Import Excel
- barryvdh/laravel-dompdf // Export to PDF 
- openspout/openspout // Export to Excel
- etc.

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
