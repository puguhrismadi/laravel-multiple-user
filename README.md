<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Simple Login Multiple User Auth Laravel

Projek ini adalah projek laravel di projek Aplikasi Tata Kelola Surat Menyurat di Sekolah, Level user yang ada dalam projek sederhana ini terdiri dari :

- Level user Admin.
- Level User Petugas Bidang Hubungan Industri (hubin)
- Level User Siswa 


## Langkah Pertama : Install Laravel

1. Install Laravel
Installah sebuah fresh laravel versi 7 dengan menjalankan perintah berikut ini di terminal atau cmd kalian. composer create-project --prefer-dist laravel/laravel:^7.0 latihan_middleware   

## 2. Persiapan Database dan Migration

Buatlah sebuah database baru di dalam phpmyadmin dengan nama laravel. Karena nama database yang kita buat adalah laravel, maka kita tidak perlu mengedit file `.env`. Tapi jika kalian ingin nama database yang berbeda, kalian juga harus mengedit nama database di dalam file `.env`

 Setelah membuat sebuah database baru, selanjutnya masuk ke dalam project latihan_middleware dan buka folder database → migrations → 2014_10_12_000000_create_users_table.php. Lalu ubahlah isi dari public function up() dengan script yang ada di bawah ini 

 ```Sql
 Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->enum('role', ['admin', 'penjual', 'pembeli'])->default('pembeli');
    $table->rememberToken();
    $table->timestamps();
});'''

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
