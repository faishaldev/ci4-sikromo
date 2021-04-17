# Sikromo
<br>
<p align="center">
  <img width=480 src="public/logo/Sikromo_logo.png">
</p>
<br>
<p align="center"> Sistem Informasi Keuangan Percetakan CV Romo
<br>

## Apa itu Sikromo?
**Sikromo** adalah sebuah project Praktik Kerja Lapangan yang dikerjakan untuk
**Percetakan CV Romo Tegal** yang berupa sistem informasi pengelolaan keuangan
Percetakan CV Romo Tegal.

## Fitur - Fitur Sikromo
* Sistem Sikromo dapat menampilkan ringkasan pemasukan
dan pengeluaran, serta grafik perbandingan pemasukan dan pengeluaran per bulan dan per tahun.
* Sistem Sikromo dapat melakukan pengelolaan pemasukan pada menu pemasukan.
* Sistem Sikromo dapat melakukan pengelolaan pengeluaran pada menu pengeluaran.
* Sistem Sikromo dapat melakukan pengelolaan hutang pada menu hutang.
* Sistem Sikromo dapat melakukan pengelolaan karyawan pada menu karyawan.
* Sistem Sikromo dapat melakukan ekspor laporan laba-rugi berdasarkan interval tanggal masukan.

## Instalasi

`git clone https://github.com/Musshal/ci4-sikromo.git` kemudian `php spark migrate -all` untuk migrasi basis data yang dibutuhkan.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use Github issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
