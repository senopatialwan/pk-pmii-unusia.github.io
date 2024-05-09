## PMII
PMII (Pergerakan Mahasiswa Islam Indonesia) adalah sebuah aplikasi berbasis web yang dibangun menggunakan framework Laravel.

Aplikasi ini bertujuan untuk membantu manajemen dan pengelolaan data anggota, kegiatan, dan informasi lainnya yang terkait dengan kegiatan organisasi PMII.

## Persyaratan Sistem
Sebelum memulai instalasi, pastikan sistem kamu telah memenuhi persyaratan berikut:

- Paket komplit silakan install [**Laragon**](https://laragon.org/download/index.html)
  - PHP versi 8.1 atau yang lebih baru
  - Composer
  - MySQL atau database lain yang didukung oleh Laravel

## Langkah Instalasi
1 Clone Repository
    ```bash
    git clone https://github.com/namarepositori/pmii-laravel.git
    ```
    
2 Instal Dependencies
    ```bash
    cd pmii-laravel
    composer install
    ```

3 Salin Berkas Konfigurasi
    ```bash
    cp .env.example .env
    ```

4 Buat Kunci Aplikasi
    ```vbnet
    php artisan key:generate
    ```

5 Jalankan Migrasi dan Seeder
    ```css
    php artisan migrate
    php artisan db:seed --class=AnggotaSeeder
    ```

6 Jalankan Server Lokal
    ```vbnet
    php artisan serve
    ```

6.1 **Atau jalankan Laragon**
  - Panduan belum tersedia.

## PMII HTML
- [PMII Unusia.html](https://drive.google.com/drive/folders/1U1bCfqfCAMrrKR6JFhi9ljYvndW6TwiD?usp=drive_link)
- [Template Html](https://drive.google.com/file/d/1ZhvLw9J72zQJtohkvm5o6hgJaccZ6mI0/view?usp=sharing)
