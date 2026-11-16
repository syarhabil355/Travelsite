# Travelsite

Aplikasi pemesanan perjalanan berbasis Laravel. Pengunjung dapat melihat jadwal dan lokasi, mendaftar, memesan tiket, mengunggah bukti pembayaran, serta melihat riwayat transaksi. Admin dapat mengelola data perjalanan dan transaksi.

## Persyaratan

- PHP 8.0.2 atau lebih baru, dengan ekstensi `fileinfo`, `mbstring`, `openssl`, dan `pdo_mysql` aktif
- Composer
- Node.js dan npm
- MySQL atau MariaDB

Di Windows, XAMPP menyediakan PHP dan MySQL/MariaDB. Pastikan Apache tidak memakai port yang sama dengan server lain; untuk aplikasi ini cukup nyalakan MySQL di XAMPP.

## Instalasi lokal

1. Clone repository dan masuk ke folder project:

   ```powershell
   git clone https://github.com/syarhabil355/Travelsite.git
   cd Travelsite
   ```

2. Pasang dependency:

   ```powershell
   composer install
   npm install
   ```

3. Nyalakan MySQL/MariaDB. Buat database bernama `travel` dengan collation `utf8mb4_general_ci`, lalu impor file `travel.sql` ke database tersebut. Di phpMyAdmin, pilih database `travel`, buka tab **Import**, pilih `travel.sql`, lalu klik **Import/Go**.

   File dump berisi perintah `DROP TABLE IF EXISTS`. Impor ke database baru atau database yang memang boleh ditimpa, karena tabel bernama sama akan diganti.

4. Buat konfigurasi lokal dan app key:

   ```powershell
   Copy-Item .env.example .env
   php artisan key:generate
   ```

   Buka `.env` dan sesuaikan koneksi database dengan konfigurasi MySQL lokal:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=travel
   DB_USERNAME=root
   DB_PASSWORD=
   ```

   Isi `DB_PASSWORD` jika akun MySQL memiliki password. File `.env` hanya untuk mesin lokal dan tidak boleh di-commit.

5. Build asset frontend:

   ```powershell
   npm run build
   ```

6. Jalankan aplikasi:

   ```powershell
   php artisan serve
   ```

   Buka alamat yang ditampilkan di terminal, biasanya <http://127.0.0.1:8000>.

Database sudah disediakan oleh `travel.sql`, jadi tidak perlu menjalankan migrasi untuk setup ini. Hindari `php artisan migrate:fresh` karena perintah itu menghapus tabel dan data.

## Cara menggunakan

### Pengunjung dan pemesan

1. Dari beranda, buka **Cek Jadwal** untuk mencari perjalanan.
2. Buka **Lokasi** dan **Cara Bayar** untuk melihat informasi perjalanan dan pembayaran.
3. Buka **Login**, pilih **Register**, lalu masuk menggunakan akun yang dibuat. Akun baru memiliki peran `USER`.
4. Pilih perjalanan dan ikuti proses checkout. Setelah transaksi dibuat, unggah bukti pembayaran dan lihat statusnya di riwayat tiket.
5. Halaman **Kontak** bisa digunakan untuk mengirim pesan kepada pengelola.

### Admin

Masuk menggunakan akun dengan level `ADMIN` atau `SUPERADMIN`, lalu buka **Dashboard**. Dari sana admin dapat mengelola jadwal perjalanan, lokasi, unit, data pelanggan, metode pembayaran, konten, dan transaksi. Pendaftaran biasa hanya membuat akun `USER`; akun admin perlu disiapkan oleh pengelola database.

## Jika menemui masalah

- **Koneksi database gagal:** pastikan MySQL aktif, nama database benar, dan nilai `DB_*` di `.env` sesuai.
- **Tabel tidak ditemukan:** pastikan `travel.sql` diimpor ke database yang sama dengan `DB_DATABASE`.
- **Konfigurasi lama masih terbaca:** jalankan `php artisan config:clear`.
- **Asset tidak tampil:** jalankan `npm install` lalu `npm run build`.
- **Composer mengeluhkan ekstensi PHP:** aktifkan ekstensi yang disebutkan di `php.ini`, lalu buka terminal baru.
