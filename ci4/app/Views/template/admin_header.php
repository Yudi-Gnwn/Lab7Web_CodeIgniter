<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('admin.css'); ?>">
</head>

<body>
    <div id="container">
        <header>
            <h1>Admin Portal Berita</h1>
        </header>
        <nav>
            <a href="<?= base_url('/artikel'); ?>" class="active">Dashboard</a>
            <a href="<?= base_url('/artikel'); ?>">Artikel</a>
            <a href="<?= base_url('admin/artikel/add'); ?>" class="btn btn-primary">Tambah Artikel</a>
        </nav>

        <!-- Tambahkan ini di sini -->
        <?= $this->renderSection('content'); ?>
    </div>
</body>
</html>