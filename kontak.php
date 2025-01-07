<?php include 'templates/header.php'; ?>
<div class="container mt-5">
    <h1>Kontak Kami</h1>
    <p>Jika Anda memiliki pertanyaan, silakan hubungi kami melalui formulir di bawah ini.</p>
    <form action="proses_kontak.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>

<?php include 'templates/footer.php'; ?>
