# Test-ProgrammerTATI-Donny_Kurniawan
Nama: Donny Kurniawan<br>
Email: donnykurniawan2206@gmail.com<br>
HP: 083846004176<br>

Soal 1
- Soal no 1 berada di folder project "soal_1_2"
- Ganti konfigurasi DB_CONNECTION dll jika diperlukan pada folder .env
- Buat DB yang sesuai dengan konfigurasi. Jika mengacu dengan konfigurasi yang saya gunakan, maka buat DB baru bernama "daily_log"
- run "php artisan migrate"
- run "php artisan db:seed"
- run "php artisan serve" untuk start aplikasi
- Buka: http://127.0.0.1:8000 di browser
- Login di masing-masing user dengan username berikut (password: "password" di semua akun):<br>
kepaladinas@gmail.com<br>
kepalabidang1@gmail.com<br>
kepalabidang2@gmail.com<br>
staff1@gmail.com<br>
staff2@gmail.com<br>

Soal 2
- Lakukan langkah awal seperti di soal 1
- Login sebagai Staff 1/Staff 2
- Isi data log aktifitas
- Maka bisa terlihat bawha tampilan sudah sesuai dengan petunjuk di soal

Soal 3
- Soal no 1 berada di folder project "soal_3"
- Ganti konfigurasi DB_CONNECTION dll jika diperlukan pada folder .env
- Buat DB yang sesuai dengan konfigurasi. Jika mengacu dengan konfigurasi yang saya gunakan, maka buat DB baru bernama "province"
- run "php artisan migrate"
- run "php artisan db:seed"
- run "php artisan serve" untuk start aplikasi
- Buka Postman, dan buka [GET] http://127.0.0.1:8000/api/provinsi. Maka akan tampil semua data provinsi
- Buka [GET] http://127.0.0.1:8000/api/provinsi/11. Maka akan tampil detil provinsi Aceh
- Buka [POST] http://127.0.0.1:8000/api/provinsi?name=Data dummy&lat=4.695135&lng=96.7493993&google_place_id=ChIJvcR8UN-bOTARYMogsoCdAwE. Maka akan menambahkan data provinsi baru bernama "Data dummy"
- Buka [PUT] http://127.0.0.1:8000/api/provinsi/11?name=Aceh edit. Maka data Aceh akan terubah
- Buka [DELETE] http://127.0.0.1:8000/api/provinsi/11. Maka data Aceh akan terhapus

Soal 4
- Soal no 4 berada di luar folder dengan nama file "soal_4.php"
- Ubah-ubah variable yang ada di //workspace sesuai dengan variable di //init
- Run file dengan XAMPP

Soal 5
- Soal no 5 berada di luar folder dengan nama file "soal_5.php"
- Ubah variable pada helloWorld(20);
- Run file dengan XAMPP
