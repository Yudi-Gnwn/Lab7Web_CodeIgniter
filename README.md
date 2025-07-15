# Tugas Praktikum Web 1-11 - CodeIgniter

# Praktikum 1
- download codeigniter dari website, kemudian ekstrak file ke direktori baru
  htdocs/lab11_ci, kemudian ubah nama file menjadi ci4
- kemudian cek ```http://localhost/lab11_ci/ci4/public```
  
  <img width="1366" height="478" alt="Screenshot 2025-03-19 112837" src="https://github.com/user-attachments/assets/eedc9809-bef0-4bcd-b392-108731ee0ce9" />

- buka cmd kemudian masuk ke direktori project

  <img width="579" height="117" alt="Screenshot 2025-03-19 113715" src="https://github.com/user-attachments/assets/949aea2e-1393-4f05-8d30-86e8e2553529" />

- kemudian jalankan codeigniter dengan perintah```php spark```

  <img width="1175" height="464" alt="Screenshot 2025-03-19 115600" src="https://github.com/user-attachments/assets/1aab5adb-ea3c-48e9-86d8-dc69b5a6e870" />

- masuk ke file ```.env``` kemudian rubah variabel menjadi ```CI_ENVIRONMENT = development```

  <img width="722" height="242" alt="Screenshot 2025-03-19 115804" src="https://github.com/user-attachments/assets/8c91c590-48da-4dad-b54e-e20ab9b61244" />

- jika terjadi error, maka akan terbaca oleh codeigniter

  <img width="1604" height="547" alt="Screenshot 2025-03-20 090736" src="https://github.com/user-attachments/assets/1ce9df44-5e39-42d7-97fa-662813b7acf3" />
  
- kemudian membuat konfigurasi di ```app/Config/Routes.php```

  <img width="688" height="266" alt="Screenshot 2025-03-20 090057" src="https://github.com/user-attachments/assets/5a2120ae-accb-4793-b3c9-955f11cf7432" />

- buka cmd dan lakukan ```php spark route``` untuk mengecek route yang telah dibuat
  
  <img width="1146" height="296" alt="Screenshot 2025-03-20 090113" src="https://github.com/user-attachments/assets/7e50ae66-ad3b-4d17-9c7f-68bdab39bdbf" />

- lakukan pengecekan dengan ```http/localhost:8080/about```

  <img width="1351" height="720" alt="Screenshot 2025-03-20 092859" src="https://github.com/user-attachments/assets/0a6ceeb0-8326-4460-80e4-38119c5f2457" />

- membuat controller agar halaman ```About```  bisa terkoneksi
- buat file baru ```Page.php``` pada direktori ```app/Controller```, kemudian masukan code berikut:

  <img width="454" height="289" alt="Screenshot 2025-07-04 165920" src="https://github.com/user-attachments/assets/e520688b-a36a-45b3-a2c7-a88042d2f706" />

- Refresh dan cek kembali web browser, maka halaman about sudah terkoneksi
- kemudian sesuaikan halaman about sesuai dengan struktur pada modul Praktikum
  
  <img width="1082" height="119" alt="Screenshot 2025-03-20 093623" src="https://github.com/user-attachments/assets/cd7de949-8921-4e56-8b4e-64cb784582bf" />

- Setelah menyesuaikan struktur web, kemudian tambahkan CSS
- buat file pada direktori ```public``` dengan nama ```stye.css``` mengikuti dari praktikum sebelumnya (lab4_layout)
  
  <img width="1059" height="408" alt="Screenshot 2025-07-04 171449" src="https://github.com/user-attachments/assets/90300549-6592-4a13-956a-26379582285d" />

- pada direktori ```views``` buat folder ```template```, disana kita mengisikan file ```header.php``` dan ```footer.php``` untuk meringkas code pada ```app/views/about.php```
- akses kembali ```http://localhost:8080/lab11_ci/ci4/public```

  <img width="1552" height="848" alt="Screenshot 2025-03-20 101438" src="https://github.com/user-attachments/assets/38945e31-1ad3-4c16-87ba-068b7bc59142" />



# Praktikum 2

- nyalakan Mysql server pada xampp, lalu masuk ke database menggunakan cmd
- buat database di cmd dengan perintah ```CREATE DATABASE lab_ci4;```

  <img width="684" height="325" alt="2 2" src="https://github.com/user-attachments/assets/21299ff7-cb30-49e5-a3c2-812ce4b9327a" />

- kemudian kita melakukan konfigurasi untuk menghubungkan ke database server pada file ```.env```
  
  <img width="546" height="287" alt="2 3" src="https://github.com/user-attachments/assets/fba6902e-8965-4017-9af3-613d88f00d58" />

- buat file baru pada direktori ```app/Models``` dengan nama ```ArtikelModel.php``` untuk membuat script pengolahan data artikel

  <img width="874" height="471" alt="2 4" src="https://github.com/user-attachments/assets/ed619020-9ba1-48a9-baec-355225d7e364" />

- pada direktori ```app/Controler```, kita membuat Controler baru dengan nama ```Artikel.php```, dengan script dibawah:

  <img width="940" height="498" alt="2 5" src="https://github.com/user-attachments/assets/ada1c18f-3f25-419c-b148-328191326a4b" />

- pada direktori ```app/views```, buat direktori baru dengan nama ```artikel``` dan tambahkan/buat file ```index.php```

  <img width="944" height="579" alt="2 6" src="https://github.com/user-attachments/assets/d8221834-c144-4cee-92c6-d26a8ba49f1f" />

- setelah sudah di setup, kita bisa menambahkan data artikel ke database untuk bisa ditampilkan pada Web

  <img width="1889" height="212" alt="2 8" src="https://github.com/user-attachments/assets/0f6557db-3ecc-40fb-91ae-e73470409594" />

- Cek browser untuk melihat perubahan
  
  <img width="1912" height="479" alt="2 9" src="https://github.com/user-attachments/assets/6f87a8f4-7e2d-4d5d-b5e6-1bcdb9c934c8" />

- Membuat tampilan Detail Artikel
- taambahkan function ```view()``` pada ```Controller Article```

  <img width="931" height="556" alt="2 10" src="https://github.com/user-attachments/assets/e2b494fb-066a-4ba8-8add-6af64c844500" />

- Membuat View Detail, buat view baru untuk halaman detail pada ```app/views/artikel/detail.php```

  <img width="977" height="330" alt="2 11" src="https://github.com/user-attachments/assets/8c97d228-1a74-4084-857d-daec42f69f77" />

- Membuat routing untuk artikel detail
- buka ```app/config/Routes.php```, kemudian tambahkan
  ```
  $routes->get('/artikel/(:any)', 'Artikel::view/$1');
  ```
  untuk artikel detail

  <img width="1434" height="508" alt="2 12" src="https://github.com/user-attachments/assets/6ba35325-3a96-4d0a-b25c-8d37491f19df" />

- Selanjutnya kita membuat menu admin dengan nama ```admin_index``` pada ```Controller Artikel``` untuk memproses CRUD

  <img width="1037" height="339" alt="2 13" src="https://github.com/user-attachments/assets/0789c39b-3aa7-47c7-8feb-5fb71c030b62" />

- kemudian membuat view untuk tampilan admin dengan nama ```admin_index.php```

  <img width="788" height="673" alt="2 14" src="https://github.com/user-attachments/assets/75ac347e-6138-4194-aa40-40ba937b77d7" />

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
  
  <img width="1855" height="524" alt="2 16" src="https://github.com/user-attachments/assets/3695ebc9-4a12-4771-8662-f9cc84b91aca" />

- selanjutnya kita bisa membuat fungsi untuk menambahkan data arikel dengan ```add()``` pada ```Controller Artikel```

  <img width="964" height="676" alt="2 17" src="https://github.com/user-attachments/assets/1f9fc673-4b9b-47c9-9afb-3eb34e7e61b5" />

- buat view untuk form add dengan nama ```form_add.php```, kamudian cek kembali url nya

  <img width="1879" height="719" alt="2 19" src="https://github.com/user-attachments/assets/d6fd532b-dae9-418c-b975-9ecbd673999e" />

- kemudian kita bisa membuat fungsi untuk mengubah data ```edit()``` pada ```Controller Artikel```

  <img width="936" height="770" alt="2 20" src="https://github.com/user-attachments/assets/e08b6d7b-8d43-425f-b14b-486f03c1b227" />

- Membuat View untuk form edit, buat dengan nama ```from_edit.php```

  <img width="934" height="477" alt="2 21" src="https://github.com/user-attachments/assets/1e02dabb-7402-4271-a77f-55ab87db9ab2" />

  <img width="1858" height="603" alt="2 22" src="https://github.com/user-attachments/assets/82621cfb-9739-48bd-bcf6-bb8e4ae97b64" />

- lanjut dengan membuat fungsi dengan nama ```delete()``` pada ```Controller Artikel``` untuk menghapus Data

  <img width="689" height="271" alt="2 23" src="https://github.com/user-attachments/assets/b19b39cb-4be1-4495-a202-5e7d29c16cce" />


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

## Praktikum3_Tugas 3
1. Sesuaikan data dengan praktikum sebelumnya, perlu melakukan perubahan ```field``` pada database
  dengan menambahkan tanggal agar dapat mengambil data artikel terbaru.


- kita perlu menambahkan field ```created_at``` pada tabel ```artikel``` untuk mangambil artikel terbaru
  ```
  ALTER TABLE artikel ADD created_at DATETIME DEFAULT CURRENT_TIMESTAMP;
  ```

  ![3 5 1](https://github.com/user-attachments/assets/f25dd14e-3121-4c6f-b6c8-8e96a5c3cb50)

  field ```created_at``` digunakan untuk menampilkan artikel terbaru menggunakan ```View cell```

  ```
  SELECT id, judul, created_at FROM artikel ORDER BY created_at DESC LIMIT 5;
  ```
  
  ![3 5 3](https://github.com/user-attachments/assets/79d493e6-1eab-40a9-a051-447451100450)

3. Apa manfaat utama dari penggunaan View Layout dalam pengembangan aplikasi?<br>
   - Struktur layout cukup ditulis sekali, Halaman hanya fokus pada konten dan
     mempermudah maintain juga pengembangan desain antarmuka.

4. Jelaskan perbedaan antara ```View Cell``` dan ```View``` biasa<br>
   - ```View```, dipakai untuk halaman utama, seperti home.php dan artikel.php.<br>
     (Kita perlu mengirim data dari controller ke view)<br>
   - ```View Cell```, seperti komponen kecil dan mandiri, mirip seperti widget atau partial.<br>
     biasanya untuk membuat sidebar atau Menu navigasi kecil<br>
     (Komponen yang bisa dipakai ulang di banyak halaman)


# Praktikum 4

- Siapkan database server, nyalakan ```Mysql``` di Xampp 
- Pertama, buat tabel user login
  ```
  CREATE TABLE user (
    id INT(11) auto_increment,
    username VARCHAR(200) NOT NULL,
    useremail VARCHAR(200),
    userpassword VARCHAR(200),
    PRIMARY KEY(id)
  );
  ```

- Kemudian membuat script untuk memproses data Login
- Buat file baru pada ```app/Models``` dengan nama ```UserModel.php```, lalu tambahkan code berikut:

  ```
  <?php

  namespace App\Models;
  
  use CodeIgniter\Model;
  
  class UserModel extends Model
  {
      protected $table = 'user';
      protected $primaryKey = 'id';
  
      protected $useAutoIncrement = true;
      protected $allowedFields = ['username', 'useremail', 'userpassword'];
  }
  ```

- Pada direktori ```app/Controllers``` buat controller baru dengan nama ```User.php```
- menambahkan method ```index()``` dan ```login()```.

  ![Screenshot 2025-07-06 105929](https://github.com/user-attachments/assets/49e4c4de-5e6b-4a62-9b3c-850732ab9132)

- Membuat View Login
- pada direktori ```app/Views```, buat direktori baru dengan nama ```user``` kemudian isikan dengan file ```login.php```
- masukan code berikut:

  ```
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Login</title>
      <link rel="stylesheet" href="<?= base_url('/style.css');?>">
  </head>
  <body>
      <div id="login-wrapper">
              <h1>Sign In</h1>
              <?php if(session()->getFlashdata('flash_msg')):?>
                  <div class="alert alert-danger"><?= session()
  >getFlashdata('flash_msg') ?></div>
              <?php endif;?>
              <form action="" method="post">
                  <div class="mb-3">
                      <label for="InputForEmail" class="form-label">Email
  address</label>
                      <input type="email" name="email" class="form-control"
  id="InputForEmail" value="<?= set_value('email') ?>">
                  </div>
                  <div class="mb-3">
                      <label for="InputForPassword" class="form
  label">Password</label>
                      <input type="password" name="password" class="form
  control" id="InputForPassword">
                  </div>
                  <button type="submit" class="btn btn-
  primary">Login</button>
              </form>
      </div>
  </body>
  </html>
  ```

- Membuat Database Seeder
- Database seeder berfungsi untuk membuat data dummy. Untuk keperluan ujicoba modul login,<br>
  kita perlu memasukkan data user dan password kedalam database. Untuk itu buat database seeder untuk tabel user.<br>
  ```
  php spark make:seeder UserSeeder
  ```

- Selanjutnya, buka file ```UserSeeder.php``` yang berada di ```app/Database/Seeds/UserSeeder.php```<br>
  kemudian isi dengan kode berikut:

  ![Screenshot 2025-07-06 110811](https://github.com/user-attachments/assets/6c08a534-843c-474e-b901-e28820d73544)

- selanjutnya buka cmd lalu lakukan perintah berikut:
  ```
  php spark db:seed UserSeeder
  ```

### Uji coba login
- buka url ```http://localhost:8080/user/login```

  ![4 6](https://github.com/user-attachments/assets/cd163c53-f144-41db-9450-2a5dd15dab57)

- selanjutnya buat filter untuk halama admin
- pada direktori ```app/Filters``` buat file baru ```Auth.php``` kemudian masukan code:

  ![Screenshot 2025-07-06 112946](https://github.com/user-attachments/assets/739899c0-d673-433b-af6c-d04f52810fa7)

- Selanjutnya buka ```app/Config/Filters.php``` tambahkan kode berikut:
  ```
  'auth' => Auth::class,
  ```

  ![Screenshot 2025-07-06 113354](https://github.com/user-attachments/assets/6764fefc-40cb-4242-af23-e8d3fb62e4a9)

- Kemudian buka ```app/Config/Routes.php``` dan sesuaikan kodenya

  ![Screenshot 2025-07-06 113912](https://github.com/user-attachments/assets/783f266b-7104-42fb-9b2b-0c3db9321430)

### Akses menu admin
- Buka url ```http://localhost:8080/admin/artikel``` ketika alamat tersebut diakses, maka muncul halaman login.
- kemudian masuk sebagai Admin, jika berhasil akan muncul seperti:

  ![4 8'2](https://github.com/user-attachments/assets/7f63f0e4-939f-4384-877a-a44a4b25b518)

- Terakhir, kita bisa membuat method ```logout``` pada ```Controller User``` dengan code:
  ```
   public function logout()
    {
        session()->destroy();
        return redirect()->to('/user/login');
    }
  ```

## Praktikum 5

- Membuat Pagination
- fungsi pagination sudah tersedia pada Library untuk ci4
- buka ```Controller Artikel```, kemudian ubah code pada method ```admin_index``` menjadi code berikut:
  
  ```
  public function admin_index()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $data = [
            'title'   => $title,
            'artikel' => $model->paginate(10), #data dibatasi 10 record per halaman
            'pager'   => $model->pager,
            ];
        return view('artikel/admin_index', $data);
    }
  ```
- Kemudian buka ```view/artikel/admin_index.php```, lalu tambahkan code berikut dibawah deklarasi tabel data
  
  ```
  <?= $pager->links(); ?>
  ```
- Kemudian cek kembali perubahan pada halaman artikel:

  ![5 1](https://github.com/user-attachments/assets/608dd559-f627-45db-9d39-a57d3bc7717b)

- Untuk membuat filtering artikel, buka ```Controller Artikel``` pada method ```admin_index```, ubah code menjadi:
  
  ```
   public function admin_index()
    {
        $title = 'Daftar Artikel';
        $q = $this->request->getVar('q') ?? '';
        $model = new ArtikelModel();
        $data = [
            'title'   => $title,
            'q'       => $q,
            'artikel' => $model->like('judul', $q)->paginate(10),
            'pager'   => $model->pager,
        ];
        return view('artikel/admin_index', $data);
    }
  ```
- pada ```view/artikel/admin_index.php``` tambahkan form pencarian sebelum deklarasi tabel:
  
  ```
  <form method="get" class="form-search">
    <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari data">
    <input type="submit" value="Cari" class="btn btn-primary">
  </form>
  ```
- pada link pager ubah:
  
  ```
  <?= $pager->only(['q'])->links(); ?>
  ```

  ![5 2](https://github.com/user-attachments/assets/581c3f5c-4159-45a5-9d2f-3a985785e245)


## Praktikum 6

- Membuat fungsi untuk menambahkan Gambar
- buka ```Controller Artikel```, kemudian sesuaikan code pada method ```add```:
  
  ```
    public function add()
    {
        // validasi data.
        $validation =  \Config\Services::validation();
        $validation->setRules(['judul' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid)
        {
            $file = $this->request->getFile('gambar');
            $file->move(ROOTPATH . 'public/gambar');

            $artikel = new ArtikelModel();
            $artikel->insert([
                'judul'  => $this->request->getPost('judul'),
                'isi'    => $this->request->getPost('isi'),
                'slug'   => url_title($this->request->getPost('judul')),
                'gambar' => $file->getName(),
            ]);
            return redirect('admin/artikel');
        }
        $title = "Tambah Artikel";
        return view('artikel/form_add', compact('title'));
    }
  ```
- Selanjutnya pada ```view/artikel/form_add.php``` tambahkan field input:
  
  ```
   <p>
        <input type="file" name="gambar">
  </p>
  ```
- kemudian sesuikan tag form dengan menambahkan ```ecrypt type``` seperti berikut:
  
  ```
  <form action="" method="post" enctype="multipart/form-data">
  ```


## Praktikum 7

- Membuat tabel kategori
- buat tabel baru ```kategori``` pada ```database``` dengan:
  
  ```
  CREATE TABLE kategori (
   id_kategori INT(11) AUTO_INCREMENT,
   nama_kategori VARCHAR(100) NOT NULL,
   slug_kategori VARCHAR(100),
   PRIMARY KEY (id_kategori)
  );
  ```
- Mengubah tabel artikel
- Tambahkan foreign key pada tabel ```artikel``` untuk membuat relasi dengan tabel ```kategori```
  
  ```
  ALTER TABLE artikel
  ADD COLUMN id_kategori INT(11),
  ADD CONSTRAINT fk_kategori_artikel
  FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori);
  ```
- Kemudian buat file model pada ```app/Models``` dengan nama ```KategoriModel.php```
  
  ```
  <?php

  namespace App\Models;
  
  use CodeIgniter\Model;
  
  class KategoriModel extends Model
  {
      protected $table = 'kategori';
      protected $primaryKey = 'id_kategori';
      protected $useAutoIncrement = true;
      protected $allowedFields = [nama_kategori', 'slug_kategori'];
  }
  ```
- ubah ```ArtikelModel.php``` untuk membuat relasi dengan ```KategoriModel```
  ```
  <?php

  namespace App\Models;
  
  use CodeIgniter\Model;
  
  class ArtikelModel extends Model
  {
     protected $table = 'artikel';
     protected $primaryKey = 'id';
     protected $useAutoIncrement = true;
     protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar',
  'id_kategori'];
  
     public function getArtikelDenganKategori()
     {
        return $this->db->table('artikel')
                    ->select('artikel.*, kategori.nama_kategori')
                    ->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
                    ->get()
                    ->getResultArray();
     }
  }
  ```
- Menambahkan method ```getArtikelDenganKategori()``` untuk mengambil data artikel beserta nama kategorinya menggunakan join.
  
- kemudian ubah ```Artikel.php``` untuk menggunakan model baru dan menampilkan data relasi
  ```
  <?php

  namespace App\Controllers;
  
  use App\Models\ArtikelModel;
  use App\Models\KategoriModel;
  
  class Artikel extends BaseController
  {
      public function index()
      {
          $title = 'Daftar Artikel';
          $model = new ArtikelModel();
          $artikel = $model->getArtikelDenganKategori(); // Use the new method
  
          return view('artikel/index', compact('artikel', 'title'));
      }
  
      public function admin_index()
      {
          $title = 'Daftar Artikel (Admin)';
          $model = new ArtikelModel();
  
          // Get search keyword
          $q = $this->request->getVar('q') ?? '';
          // Get category filter
          $kategori_id = $this->request->getVar('kategori_id') ?? '';
  
          $data = [
              'title' => $title,
              'q' => $q,
              'kategori_id' => $kategori_id,
          ];
  
          // Building the query
          $builder = $model->table('artikel')
   ->select('artikel.*, kategori.nama_kategori')
                          ->join('kategori', 'kategori.id_kategori =
  artikel.id_kategori');
  
          // Apply search filter if keyword is provided
          if ($q != '') {
              $builder->like('artikel.judul', $q);
          }
  
          // Apply category filter if category_id is provided
          if ($kategori_id != '') {
              $builder->where('artikel.id_kategori', $kategori_id);
          }
  
          // Apply pagination
          $data['artikel'] = $builder->paginate(10);
          $data['pager'] = $model->pager;
  
          // Fetch all categories for the filter dropdown
          $kategoriModel = new KategoriModel();
          $data['kategori'] = $kategoriModel->findAll();
  
          return view('artikel/admin_index', $data);
      }
  
      // ... (methods add, edit, delete remain largely the same, but update to
  handle id_kategori)
  
      public function add()
      {
          // Validation...
          if ($this->request->getMethod() == 'post' && $this->validate([
              'judul' => 'required',
              'id_kategori' => 'required|integer' // Ensure id_kategori is
  required and an integer
          ])) {
              $model = new ArtikelModel();
              $model->insert([
                  'judul' => $this->request->getPost('judul'),
                  'isi' => $this->request->getPost('isi'),
                  'slug' => url_title($this->request->getPost('judul')),
                  'id_kategori' => $this->request->getPost('id_kategori')
              ]);
              return redirect()->to('/admin/artikel');
          } else {
              $kategoriModel = new KategoriModel();
              $data['kategori'] = $kategoriModel->findAll(); // Fetch categories
  for the form
              $data['title'] = "Tambah Artikel";
    return view('artikel/form_add', $data);
          }
      }
  
      public function edit($id)
      {
          $model = new ArtikelModel();
          if ($this->request->getMethod() == 'post' && $this->validate([
              'judul' => 'required',
              'id_kategori' => 'required|integer'
          ])) {
              $model->update($id, [
                  'judul' => $this->request->getPost('judul'),
                  'isi' => $this->request->getPost('isi'),
                  'id_kategori' => $this->request->getPost('id_kategori')
              ]);
              return redirect()->to('/admin/artikel');
          } else {
              $data['artikel'] = $model->find($id);
              $kategoriModel = new KategoriModel();
              $data['kategori'] = $kategoriModel->findAll(); // Fetch categories
  for the form
              $data['title'] = "Edit Artikel";
              return view('artikel/form_edit', $data);
          }
      }
  
      public function delete($id)
      {
          $model = new ArtikelModel();
          $model->delete($id);
          return redirect()->to('/admin/artikel');
      }
  
      public function view($slug)
      {
          $model = new ArtikelModel();
          $data['artikel'] = $model->where('slug', $slug)->first();
          if (empty($data['artikel'])) {
              throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot
  find the article.');
          }
          $data['title'] = $data['artikel']['judul'];
          return view('artikel/detail', $data);
      }
  }
  ```

- Mengubah View
- di folder ```view/artikel``` sesuaikan untuk setiap file
- code untuk ```index.php```:
  
  ```
  <?= $this->include('template/header'); ?>

  <?php if ($artikel): foreach ($artikel as $row): ?>
      <article class="entry">
          <h2><a href="<?= base_url('/artikel/' . $row['slug']); ?>"><?=
  $row['judul']; ?></a></h2>
          <p>Kategori: <?= $row['nama_kategori'] ?></p>
          <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" alt="<?=
  $row['judul']; ?>">
          <p><?= substr($row['isi'], 0, 200); ?></p>
      </article>
      <hr class="divider" />
  <?php endforeach; else: ?>
      <article class="entry">
          <h2>Belum ada data.</h2>
      </article>
  <?php endif; ?>
  
  <?= $this->include('template/footer'); ?>
  ```
- code untuk ```admin_index.php```:
  
  ```
  <?= $this->include('template/admin_header'); ?>

  <h2><?= $title; ?></h2>
  
  <div class="row mb-3">
      <div class="col-md-6">
          <form method="get" class="form-inline">
              <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari
  judul artikel" class="form-control mr-2">
              <select name="kategori_id" class="form-control mr-2">
                  <option value="">Semua Kategori</option>
                  <?php foreach ($kategori as $k): ?>
                      <option value="<?= $k['id_kategori']; ?>" <?= ($kategori_id
  == $k['id_kategori']) ? 'selected' : ''; ?>><?= $k['nama_kategori'];
  ?></option>
                  <?php endforeach; ?>
              </select>
              <input type="submit" value="Cari" class="btn btn-primary">
          </form>
      </div>
  </div>
  
  <table class="table">
      <thead>
   <tr>
              <th>ID</th>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Status</th>
              <th>Aksi</th>
          </tr>
      </thead>
      <tbody>
          <?php if (count($artikel) > 0): ?>
              <?php foreach ($artikel as $row): ?>
                  <tr>
                      <td><?= $row->id; ?></td>
                      <td>
                          <b><?= $row->judul; ?></b>
                          <p><small><?= substr($row->isi, 0, 50); ?></small></p>
                      </td>
                      <td><?= $row->nama_kategori; ?></td>
                      <td><?= $row->status; ?></td>
                      <td>
                          <a class="btn btn-sm btn-info" href="<?= base_url('/admin/artikel/edit/' . $row->id); ?>">Ubah</a>
                          <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/artikel/delete/' . $row->id);>
                          ">Hapus</a>
                      </td>
                  </tr>
              <?php endforeach; ?>
          <?php else: ?>
              <tr>
                  <td colspan="5">Tidak ada data.</td>
              </tr>
          <?php endif; ?>
      </tbody>
  </table>
  
  <?= $pager->only(['q', 'kategori_id'])->links(); ?>
  
  <?= $this->include('template/admin_footer'); ?>
  ```
- code untuk ```form_add.php```:
  
  ```
  <?= $this->include('template/admin_header'); ?>

  <h2><?= $title; ?></h2>
  
  <form action="" method="post">
      <p>
          <label for="judul">Judul</label>
  <input type="text" name="judul" id="judul" required>
      </p>
      <p>
          <label for="isi">Isi</label>
          <textarea name="isi" id="isi" cols="50" rows="10"></textarea>
      </p>
      <p>
          <label for="id_kategori">Kategori</label>
          <select name="id_kategori" id="id_kategori" required>
              <?php foreach($kategori as $k): ?>
                  <option value="<?= $k['id_kategori']; ?>"><?=
  $k['nama_kategori']; ?></option>
              <?php endforeach; ?>
          </select>
      </p>
      <p><input type="submit" value="Kirim" class="btn btn-large"></p>
  </form>
  
  <?= $this->include('template/admin_footer'); ?>
  ```
- code untuk ```from_edit.php```:
  
  ```
  <?= $this->include('template/admin_header'); ?>

  <h2><?= $title; ?></h2>
  
  <form action="" method="post">
      <p>
          <label for="judul">Judul</label>
          <input type="text" name="judul" value="<?= $artikel['judul']; ?>"
  id="judul" required>
      </p>
      <p>
          <label for="isi">Isi</label>
          <textarea name="isi" id="isi" cols="50" rows="10"><?= $artikel['isi'];
  ?></textarea>
      </p>
      <p>
          <label for="id_kategori">Kategori</label>
          <select name="id_kategori" id="id_kategori" required>
              <?php foreach($kategori as $k): ?>
                  <option value="<?= $k['id_kategori']; ?>" <?=
  ($artikel['id_kategori'] == $k['id_kategori']) ? 'selected' : ''; ?>><?=
  $k['nama_kategori']; ?></option>
              <?php endforeach; ?>
          </select>
      </p>
      <p><input type="submit" value="Kirim" class="btn btn-large"></p>
  </form>
  <?= $this->include('template/admin_footer'); ?>
  ```
  
### Uji coba Hasil Perubahan
- Menampilkan kategori di setiap judul artikel

  ![7 7 1](https://github.com/user-attachments/assets/e1b0986f-51d2-48df-b32c-69955573b9d1)

- Menambahkan artikel baru dengan memilih kategori

  ![7 7 2](https://github.com/user-attachments/assets/b449d0a4-1612-4fbf-9c8d-bb8065a51449)

- Menghapus Artikel yang sudah ada

  ![7 7 4](https://github.com/user-attachments/assets/6acad439-6db1-47fe-b56b-f95a21ef748b)


# Praktikum 8

- Menambahkan JQuery

  
