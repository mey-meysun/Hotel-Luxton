# Hotel Luxton

Sistem manajemen hotel berbasis web yang dibangun menggunakan Laravel. Aplikasi ini menyediakan fitur pemesanan kamar, manajemen pelanggan, pembayaran, dan laporan keuangan.

🛠️ Teknologi yang Digunakan

Laravel (PHP Framework)

SQLite (Database)

Blade (Template Engine)

Bootstrap (Frontend UI)

Composer (Dependency Manager)

📌 Fitur Utama

✔️ Pemesanan kamar hotel✔️ Manajemen pelanggan & admin✔️ Sistem pembayaran✔️ Laporan transaksi✔️ Role-based access control (Admin & Customer)

🚀 Instalasi

Pastikan Anda sudah menginstal PHP dan Composer sebelum memulai.

1️⃣ Clone Repository

git clone https://github.com/mey-meysun/Hotel-Luxton.git
cd Hotel-Luxton
git checkout master  # Pindah ke branch master 

2️⃣ Instal Dependensi Laravel

composer install

3️⃣ Konfigurasi Environment

Salin file .env.example menjadi .env:

cp .env.example .env

Lalu edit file .env untuk mengatur koneksi database SQLite:

DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

4️⃣ Buat File Database SQLite

Buat file database kosong untuk SQLite:

touch database/database.sqlite

5️⃣ Generate Application Key

php artisan key:generate

6️⃣ Migrasi Database dan Seeder

Jalankan perintah ini untuk membuat tabel dan mengisi data awal:

php artisan migrate --seed

Seeder ini akan membuat akun default yang bisa digunakan untuk login:

Akun Admin Default:

Username: admin

Password: 123

Akun User Default:

Username: john

Password: 234

7️⃣ Membuat Symbolic Link untuk Penyimpanan File

Untuk memastikan file yang diunggah, seperti foto.

php artisan storage:link

8️⃣ Menjalankan Aplikasi

Gunakan perintah berikut untuk menjalankan Laravel:

php artisan serve

~ semua file berada di branch master ~
