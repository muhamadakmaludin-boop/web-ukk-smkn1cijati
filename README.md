# Website SMK Negeri 1 Cijati

Website resmi SMK Negeri 1 Cijati yang dibuat dengan Laravel 13 sebagai project UKK.

## Fitur

- **Beranda**: banner sekolah dan bagian "Tentang Sekolah"
- **Profil Sekolah**: informasi umum tentang sekolah
- **Guru**: daftar guru dan tenaga pendidik
- **Jurusan**: informasi jurusan yang ada di sekolah
- **Ekstrakurikuler**: daftar kegiatan ekstrakurikuler
- **Berita**: kabar dan kegiatan terbaru sekolah
- **Kontak**: informasi untuk menghubungi sekolah
- **Panel admin**: mengelola konten website setelah login

## Teknologi

- Laravel 13 (PHP)
- MySQL
- Laragon sebagai lingkungan pengembangan

## Cara Menjalankan di Komputer Sendiri

1. Clone repository ini:

   ```bash
   git clone https://github.com/muhamadakmaludin-boop/web-ukk-smkn1cijati.git
   cd web-ukk-smkn1cijati
   ```

2. Install dependensi PHP:

   ```bash
   composer install
   ```

3. Salin file pengaturan, lalu buat kunci aplikasi:

   ```bash
   copy .env.example .env
   php artisan key:generate
   ```

4. Buat database MySQL kosong (misalnya lewat phpMyAdmin di Laragon), lalu isi
   pengaturan database di file `.env`:

   ```
   DB_DATABASE=nama_database_kamu
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Isi password akun admin di file `.env`:

   ```
   ADMIN_PASSWORD=isi_password_kamu
   ```

6. Buat tabel dan akun admin:

   ```bash
   php artisan migrate --seed
   ```

7. Hubungkan folder penyimpanan foto:

   ```bash
   php artisan storage:link
   ```

8. Jika project memakai Vite, install dan build aset tampilan:

   ```bash
   npm install
   npm run build
   ```

9. Jalankan website:

   ```bash
   php artisan serve
   ```

   Lalu buka `http://localhost:8000` di browser. Di Laragon, website juga bisa
   dibuka lewat alamat `namaproject.test`.

## Akun Admin

Email admin dapat dilihat di `database/seeders/AdminSeeder.php`. Passwordnya
diambil dari `ADMIN_PASSWORD` di file `.env`.

## Catatan

- File `.env` tidak disertakan di repository karena berisi data rahasia.
- Isi database dan foto yang di-upload lewat panel admin tidak ikut tersimpan
  di GitHub.

## Pembuat

Muhamad Akmaludin, SMKN 1 Cijati