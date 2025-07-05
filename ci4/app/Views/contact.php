<?= $this->include('template/header'); ?>

<div class="contact">
    <h2>Contact</h2>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Nama"  required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Pesan" rows="5" required></textarea>
        <button type="submit" >Send</button>
    </form>
</div>
