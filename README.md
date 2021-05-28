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
Percetakan CV Romo Tegal seperti pengelolaan pemasukan dan pengeluaran serta hutang,
juga menghasilkan laporan keuangan yang dapat disimpan atau dicetak.

## Fitur - Fitur Sikromo

- Sistem Sikromo dapat menampilkan ringkasan pemasukan
  dan pengeluaran, serta grafik perbandingan pemasukan dan pengeluaran per bulan dan per tahun.
- Sistem Sikromo dapat menampilkan daftar hutang yang belum lunas.
- Sistem Sikromo dapat melakukan pengelolaan pemasukan pada menu pemasukan.
- Sistem Sikromo dapat melakukan pengelolaan pengeluaran pada menu pengeluaran.
- Sistem Sikromo dapat melakukan pengelolaan hutang pada menu hutang.
- Sistem Sikromo dapat melakukan pengelolaan karyawan pada menu karyawan.
- Sistem Sikromo dapat melakukan ekspor laporan laba-rugi berdasarkan interval tanggal masukan.

## Instalasi & Setup Locally

1. `git clone https://github.com/Musshal/ci4-sikromo.git` atau unduh kode sumber Sikromo,
2. kemudian jalankan server lokal serta basis bata XAMPP,
3. Uncomment 'extension=pdo_sqlite' dan 'extension=sqlite3' pada file xampp/php/php.ini,
3. Jalankan perintah `php spark migrate -all` untuk migrasi basis data yang dibutuhkan.
4. Jalankan perintah 'php spark db:seed AuthGroups' dan 'php spark db:seed AuthPermissions'
  untuk melakukan insert data level pengguna.
5. Jalankan perintah 'php spark serve' untuk menjalankan aplikasi.
