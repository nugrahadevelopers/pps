<h1 align="center">Selamat datang di Aplikasi Pencatatan Penjualan Sederhana (PPS)!</h1>

<p></p>

<h4 align="center">PPS adalah sebuah aplikasi pencatatan transaksi penjualan dengan fitur - fitur tambahan yang dibuat dengan <a href="https://laravel.com/" target="_blank">Laravel</a>.
</h4>

<p></p>

<p align="center">
  <a href="#tentang">Tentang Project</a> •
  <a href="#fitur">Fitur</a> •
  <a href="#download">Download & Install</a> •
  <a href="#akun">Akun Default</a> •
  <a href="#lisensi">Lisensi</a>
</p>

<p></p>

<h2 id="tentang">Tentang PPS</h2>

Aplikasi ini dibuat sebagai tes kemampuan teknis untuk masuk ke PT. Ayo Menebar Kebaikan. Akan tetapi aplikasi ini tetap bisa dipergunakan sebagaimana aplikasi ini di peruntukan yaitu sebagai aplikasi pencatat transaksi penjualan.

<p></p>

<h2 id="fitur">Fitur Tersedia</h2>

-   Module Customer
    -   Tambah, Update dan Delete Data Customer
-   Module Item
    -   Tambah, Update dan Delete Data Item
-   Module Transaction
    -   Tambah, Update dan Delete Data Transaksi
-   Module User
    -   Tambah, Update dan Delete Data User
    -   Tambah, Update dan Delete Data Role / Hak Akses
-   Extra Artisan Command
    -   Membuat Trait (Masih dalam pengembangan)
    -   Membuat Repository (Masih dalam pengembangan)
    -   Membuat Service (Masih dalam pengembangan)

<p></p>

<h2 id="demo">Halaman Demo</h2>

Halaman demo dapat anda akses di https://pps.haireno.my.id/ perlu diketahui server dapat tiba tiba mati atau website tidak dapat diakses, oleh karena itu baiknya anda coba di local.

<p></p>

<h2 id="akun">Daftar Akun Tersedia</h2>

Berikut adalah daftar akun untuk keperluan testing saat anda mencoba aplikasi pertama kali, nemun anda harus melakukan seed terlebih dahulu dengan panduan dibawah

| Role        | Email          | Password | URL                    |
| ----------- | -------------- | -------- | ---------------------- |
| Super Admin | admin@mail.com | password | http://localhost/login |
| Staff       | staf@mail.com  | password | http://localhost/login |

<p></p>

<h2 id="syarat">Prasyarat yang Diperlukan</h2>

Berikut adalah daftar layanan dan aplikasi yang wajib dan diperlukan selama anda menjalankan aplikasi ini jika anda belum menginstall nya maka disarankan untuk menginstall nya terlebih dahulu

-   PHP 8.1.x & Web Server [XAMPP, LAMPP, MAMP, Laragon(Rekomendasi)]
-   Web Browser [Chrome, Firefox, Safari & Opera]
-   Internet [Sebagian besar / hampir semua plugin tambahan yang di perlukan disimpan di local, internet hampir tidak di perlukan untuk testing di local kecuali saat installasi project]

<p></p>

<h2 id="download">Panduan Menjalankan & Install Aplikasi</h2>

Untuk menjalankan aplikasi atau web ini kamu harus install Laragon atau web server lain dan mempunyai setidaknya satu web browser yang terinstall di komputer anda.

```bash
# Clone repository ini atau download di
$ git clone https://github.com/nugrahadevelopers/pps.git

# Kemudian jalankan command composer install, ini akan menginstall resources yang laravel butuhkan
$ composer install

# Kemudian jalankan command npm install package nodejs yang di butuhkan sekaligus mengcompilenya
$ npm install && npm run dev

# Jalankan command ini untuk mengcompile asset untuk production
$ npm run build

# Lakukan copy .env dengan cara ketik command seperti dibawah
$ cp .env.example .env

# Generate key juga jangan lupa dengan command dibawah
$ php artisan key:generate

# Jangan lupa migrate database dengan cara membuat database di phpmyadmin atau aplikasi lainnya yang kalian pakai,
# lalu jangan lupa untuk mengganti variable DB_DATABASE di file .env yang di folder project
$ php artisan migrate

# Lakukan seed untuk memasukan akun super admin, role dan permission
$ php artisan db:seed --class=AppPermissionSeeder

# Pada pengguna Laragon untuk menjalankan aplikasi cukup dengan mengetikan url namaproject.test di browser
# Jalankan aplikasi kalian dengan command dibawah jika menggunakan web server local lain
$ php artisan serve

# Selamat aplikasi dapat anda nikmati di local!
```

<p></p>

<h2 id="lisensi">📝 Lisensi</h2>

-   Copyright © 2023
-   PPS adalah aplikasi web open-source yang berlisensi dibawah lisensi MIT

<h2 id="lisensi">✨ Special Thanks</h2>

-   <a href="https://laravel.com/"> Laravel </a> for the great framework ever!

---

**<p align="center">Made with ❤️ by Reno Nugraha</p>**
