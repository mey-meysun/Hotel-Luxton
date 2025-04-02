# Hotel Luxton

Sistem manajemen hotel berbasis web yang dibangun menggunakan **Laravel**. Aplikasi ini menyediakan fitur pemesanan kamar, manajemen pelanggan, pembayaran, dan laporan keuangan.

## 🛠️ Teknologi yang Digunakan

- **Laravel** (PHP Framework)  
- **SQLite** (Database)  
- **Blade** (Template Engine)  
- **Bootstrap** (Frontend UI)  
- **Composer** (Dependency Manager)  

## 📌 Fitur Utama

- Pemesanan kamar hotel  
- Manajemen pelanggan & admin  
- Sistem pembayaran  
- Laporan transaksi  
- Role-based access control (Admin & Customer)  

---

## 🚀 Instalasi

Pastikan Anda sudah menginstal **PHP** dan **Composer** sebelum memulai.

### 1. Clone Repository
```sh
git clone https://github.com/mey-meysun/Hotel-Luxton.git
cd Hotel-Luxton
git checkout master  # Pindah ke branch master
```

### 2. Instal Dependensi Laravel
```sh
composer install
```

### 3. Konfigurasi Environment
Salin file .env.example menjadi .env:
```sh
cp .env.example .env
Lalu edit file .env untuk mengatur koneksi database SQLite:
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

### 4. Buat File Database SQLite
```sh
touch database/database.sqlite
```

### 5. Generate Application Key
```sh
php artisan key:generate
```

### 6. Migrasi Database dan Seeder
Jalankan perintah ini untuk membuat tabel dan mengisi data awal:
```sh
php artisan migrate --seed

Seeder ini akan membuat akun default yang bisa digunakan untuk login:

Akun Admin Default:
Username: admin

Password: 123

Akun User Default:
Username: john

Password: 234
```

### 7. Membuat Symbolic Link untuk Penyimpanan File
```sh
php artisan storage:link
```

### 8. Menjalankan Aplikasi
```sh
php artisan serve
```

### ~ Semua file berada di branch master ~
