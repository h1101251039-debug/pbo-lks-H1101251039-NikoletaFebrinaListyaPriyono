# pbo-lks-H1101251039-NikoletaFebrinaListyaPriyono
-Nama: Nikoleta Febrina Listya priyono
-Nim: H1101251039
-Kelas: A

# Daftar-Pertemuan
- []Pertemuan01-setup database : https://github.com/h1101251039-debug/pbo-lks-H1101251039-NikoletaFebrinaListyaPriyono/tree/main/pertemuan01
- []Pertemuan02-CoreOOF : https://github.com/h1101251039-debug/pbo-lks-H1101251039-NikoletaFebrinaListyaPriyono/tree/main/pertemuan02
- []Pertemuan03-Framework&Routine : https://github.com/h1101251039-debug/pbo-lks-H1101251039-NikoletaFebrinaListyaPriyono/tree/main/pertemuan03
- []Pertemuan04-Testing Backend : https://github.com/h1101251039-debug/pbo-lks-H1101251039-NikoletaFebrinaListyaPriyono/tree/main/pertemuan04
- []Pertemuan05-CRUD Kategori : https://github.com/h1101251039-debug/pbo-lks-H1101251039-NikoletaFebrinaListyaPriyono/tree/main/pertemuan05
- []Pertemuan06-Frontend : https://github.com/h1101251039-debug/pbo-lks-H1101251039-NikoletaFebrinaListyaPriyono/tree/main/pertemuan06
- []Pertemuan07-Integrasi&finalisasi

Cara Menjalankan Aplikasi

1. Persiapan

Pastikan perangkat telah memiliki:

PHP

Composer

MySQL atau XAMPP

Web browser

2. Konfigurasi Database

Buat database untuk aplikasi perpustakaan melalui phpMyAdmin atau MySQL.

Impor file database/schema.sql ke database yang telah dibuat.

Salin file .env.example menjadi .env.

Sesuaikan konfigurasi database di dalam file .env, seperti nama database, username, dan password.

3. Instalasi Dependency

Buka terminal pada direktori proyek, kemudian jalankan:

composer dump-autoload -o

4. Menjalankan Backend

Jalankan perintah berikut dari direktori utama proyek rest-api-perpustakaan:

php -S localhost:8000 -t public

Backend dapat diakses melalui:

http://localhost:8000

Contoh endpoint API:

http://localhost:8000/api/books

http://localhost:8000/api/categories

5. Menjalankan Frontend

Buka terminal baru pada direktori utama proyek, kemudian jalankan:

php -S localhost:3000

Buka aplikasi melalui browser:

http://localhost:3000/frontend-perpustakaan/#dashboard