# PWBO_2411500061_TI3B
TUGAS 
repository ini berisi pembelajaran Struktur MVC kustom: public/index.php melakukan bootstrap dengan App class untuk memetakan URL ke controller, method, dan parameter.
Routing sederhana: app/core/App.php mem-parse $_GET['url'] dan memanggil controller/method sesuai segmen URL.
Base controller & pemanggilan view/model: app/core/Controller.php menyediakan helper view() dan model() agar controller mudah merender tampilan serta memakai model.
Layer data dengan PDO: app/core/Database.php mengelola koneksi dan query MySQL menggunakan PDO (prepare, bind, execute, result set).
Konfigurasi global: app/init.php dan app/config/config.php mengatur autoload manual, konstanta BASEURL, dan kredensial database.
Controllers: Home, About, Mahasiswa, Matakuliah menangani logika masing-masing halaman, memanfaatkan model dan view.
Models: User_model, Mahasiswa_model, Matakuliah_model mengakses data (SELECT/INSERT/UPDATE/DELETE), termasuk binding parameter dan validasi sederhana.
Views templating sederhana: folder app/views berisi template header/footer, serta halaman spesifik untuk halaman utama, data mahasiswa, dan matakuliah.
Flash messaging: app/core/Flasher.php menggunakan session untuk menampilkan notifikasi sukses/gagal pada aksi CRUD mahasiswa.
Asset management: folder public/css, public/js, public/img memuat Bootstrap dan skrip kustom, diakses melalui BASEURL.
SQL schema & seed data: database/PWBO_61.sql menyiapkan database dengan tabel mahasiswa dan matakuliah, berikut contoh data awal.
