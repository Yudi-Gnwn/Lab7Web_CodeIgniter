# Tugas Praktikum Web 1-11 - CodeIgniter

# Praktikum 1
- download codeigniter dari website, kemudian ekstrak file ke direktori baru
  htdocs/lab11_ci, kemudian ubah nama file menjadi ci4
- kemudian cek ```http://localhost/lab11_ci/ci4/public```
  
  ![Screenshot 2025-03-19 112837](https://github.com/user-attachments/assets/5fc81915-ec3a-4c8f-ab46-39f80f405570)

- buka cmd kemudian masuk ke direktori project

  ![Screenshot 2025-03-19 113715](https://github.com/user-attachments/assets/f9b999d1-78ae-479c-b2b1-fe99bc260f60)

- kemudian jalankan codeigniter dengan perintah```php spark```

  ![Screenshot 2025-03-19 115600](https://github.com/user-attachments/assets/66a4c97d-22aa-4713-b622-f84d69dbc613)

- masuk ke file ```.env``` kemudian rubah variabel menjadi ```CI_ENVIRONMENT = development```

  ![Screenshot 2025-03-19 115804](https://github.com/user-attachments/assets/edbea406-2c10-4897-b25c-8f4df027bb3e)

- jika terjadi error, maka akan terbaca oleh codeigniter

  ![Screenshot 2025-03-20 090736](https://github.com/user-attachments/assets/80acd4b2-2a46-49e1-a933-4d3d783296d7)

- kemudian membuat konfigurasi di ```app/Config/Routes.php```

  ![Screenshot 2025-03-20 090057](https://github.com/user-attachments/assets/9b9ff089-79fe-463b-b343-554d8f1067dd)

- buka cmd dan lakukan ```php spark route``` untuk mengecek route yang telah dibuat

  ![Screenshot 2025-03-20 090113](https://github.com/user-attachments/assets/02738ed4-bbc8-4ca7-8c94-c3e15bcd147f)

- lakukan pengecekan dengan ```http/localhost:8080/about```

  ![Screenshot 2025-03-20 093610](https://github.com/user-attachments/assets/02b2b0d6-22d0-42fd-bf70-2fa78fcda5d9)

- membuat controller agar halaman ```About```  bisa terkoneksi
- buat file baru ```Page.php``` pada direktori ```app/Controller```, kemudian masukan code berikut:

  ![Screenshot 2025-07-04 165920](https://github.com/user-attachments/assets/6a9cad8b-28a6-4105-8c83-345581ed5440)

- Refresh dan cek kembali web browser, maka halaman about sudah terkoneksi
- kemudian sesuaikan halaman about sesuai dengan struktur pada modul Praktikum

  ![Screenshot 2025-03-20 093623](https://github.com/user-attachments/assets/5385558a-b416-47b6-b0ab-affb08da59a9)
 
- Setelah menyesuaikan struktur web, kemudian tambahkan CSS
- buat file pada direktori ```public``` dengan nama ```stye.css``` mengikuti dari praktikum sebelumnya (lab4_layout)

  ![Screenshot 2025-07-04 171449](https://github.com/user-attachments/assets/c4239f70-2ae6-4219-983b-a8d259c34045)

- pada direktori ```views``` buat folder ```template```, disana kita mengisikan file ```header.php``` dan ```footer.php``` untuk meringkas code pada ```app/views/about.php```
- akses kembali ```http://localhost:8080/lab11_ci/ci4/public```

  ![Screenshot 2025-03-20 101438](https://github.com/user-attachments/assets/58238671-b451-4aa2-8408-e200381ea575)


# Praktikum 2

- nyalakan Mysql server pada xampp, lalu masuk ke database menggunakan cmd
- buat database di cmd dengan perintah ```CREATE DATABASE lab_ci4;```
  
  ![2 2](https://github.com/user-attachments/assets/5c2bb726-15bc-4c6d-bc8e-57ef7d35481e)

- kemudian kita melakukan konfigurasi untuk menghubungkan ke database server pada file ```.env```

  ![2 3](https://github.com/user-attachments/assets/c1247991-11b3-431e-80ad-e69342d1626e)

- buat file baru pada direktori ```app/Models``` dengan nama ```ArtikelModel.php``` untuk membuat script pengolahan data artikel

  ![2 4](https://github.com/user-attachments/assets/c376f97e-c8fc-4cba-bbb0-f5b7bd3f3cde)

- pada direktori ```app/Controler```, kita membuat Controler baru dengan nama ```Artikel.php```, dengan script dibawah:

  ![2 5](https://github.com/user-attachments/assets/d4501a36-e548-4f44-a2ec-99220ee3387b)

- pada direktori ```app/views```, buat direktori baru dengan nama ```artikel``` dan tambahkan/buat file ```index.php```

  ![2 6](https://github.com/user-attachments/assets/123d115f-2cab-463c-89bd-21adaf790fc6)

- setelah sudah di setup, kita bisa menambahkan data artikel ke database untuk bisa ditampilkan pada Web

  ![2 8](https://github.com/user-attachments/assets/55183bc0-8f39-4b5f-8831-09d73b571b59)bu

- Cek browser untuk melihat perubahan

  ![2 9](https://github.com/user-attachments/assets/cda49e19-d245-490e-9da7-6f4926159cbc)

- Membuat tampilan Detail Artikel
- taambahkan function ```view()``` pada ```Controller Article```

  ![2 10](https://github.com/user-attachments/assets/bcb9af2f-bb55-42de-8bab-fc869c144749)

- Membuat View Detail, buat view baru untuk halaman detail pada ```app/views/artikel/detail.php```

  ![2 11](https://github.com/user-attachments/assets/7a8356fa-b99e-44b9-a577-6acb057bad4e)

- Membuat routing untuk artikel detail
- buka ```app/config/Routes.php```, kemudian tambahkan
  ```
  $routes->get('/artikel/(:any)', 'Artikel::view/$1');
  ```
  untuk artikel detail

  ![2 12](https://github.com/user-attachments/assets/43e2fe23-369c-4fa8-99e6-ff1a4adf0838)

- Selanjutnya kita membuat menu admin dengan nama ```admin_index``` pada ```Controller Artikel``` untuk memproses CRUD

  ![2 13](https://github.com/user-attachments/assets/df002890-92bf-4b99-ad14-120ce5938805)

- kemudian membuat view untuk tampilan admin dengan nama ```admin_index.php```

  ![2 14](https://github.com/user-attachments/assets/3f70f68a-37e0-49ca-b93f-7f38823ebe83)

- selanjutnya tambahkan routing untuk menu admin,
  ```
  $routes->group('admin', function($routes) {
   $routes->get('artikel', 'Artikel::admin_index');
   $routes->add('artikel/add', 'Artikel::add');
   $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
   $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
  });
  ```
  kemudian akses kembali menu admin dengan ```http://localhost:8080/admin/artikel```

  ![2 16](https://github.com/user-attachments/assets/f0b94c05-9dda-47c9-807c-c5897236c03f)

- selanjutnya kita bisa membuat fungsi untuk menambahkan data arikel dengan ```add()``` pada ```Controller Artikel```

  ![2 17](https://github.com/user-attachments/assets/c107d6bf-11c2-41ca-a0ff-9f4f5318e387)

- buat view untuk form add dengan nama ```form_add.php```, kamudian cek kembali url nya

  ![2 19](https://github.com/user-attachments/assets/a88e237d-e62a-443e-8d25-913d441d3a40)

- kemudian kita bisa membuat fungsi untuk mengubah data ```edit()``` pada ```Controller Artikel```

  ![2 20](https://github.com/user-attachments/assets/dd7f4bdf-f1b6-4293-ac55-c42ca05ce762)

- Membuat View untuk form edit, buat dengan nama ```from_edit.php```

  ![2 21](https://github.com/user-attachments/assets/9fa26fea-965e-48ad-898f-b3cfb136319f)

  ![2 22](https://github.com/user-attachments/assets/570e619d-85bb-4981-8457-d03e5136d358)

- lanjut dengan membuat fungsi dengan nama ```delete()``` pada ```Controller Artikel``` untuk menghapus Data

  ![2 23](https://github.com/user-attachments/assets/77bc5094-065d-4cd7-81d6-9c7c14712ef0)


# Praktikum 3

- Membuat layout utama
- buat folder ```layout``` di dalam ```app/Views```
- kemudian buat file baru dengan nama ```main.php```, msukan code berikut:

  ![3 1](https://github.com/user-attachments/assets/1fc28d85-4b44-4724-8136-454388639492)

- ubah ```app/Views/home.php``` agar sesuai dengan layout baru, kemudian sesuaikan untuk halaman lainnya
  dengan menggunakan format layout yang baru

  ![3 2](https://github.com/user-attachments/assets/7a82bd15-5cf0-4eb8-9772-a27618d9f5f3)

- kemudian didalam ```app/``` buat folder ```Cells```
- setelah itu buat file ```ArtikelTerkini.php``` didalam ```app/Cells``` dengan code:

  ![3 3](https://github.com/user-attachments/assets/e9b35190-c3f9-4edf-8b0d-2f39139fe783)

- masih didalam folder ```Views```, buat folder ```components```
- kemudian buat file ```artikel_rekini.php``` didalam folder```components```
- tambahkan code berikut:

  ![3 4](https://github.com/user-attachments/assets/5af98353-023e-458c-80f1-03dc179726f8)
