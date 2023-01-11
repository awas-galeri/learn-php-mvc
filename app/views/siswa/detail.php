<div class="container mt-5">
        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">Detail Siswa</div>
            <div class="card-body">
                <h5 class="card-title"><?= $data['sis']['nama']; ?></h5>
                <h6 class="card-subtitle"><?= $data['sis']['nip']; ?></h6>
                <p class="card-text"><?= $data['sis']['email']; ?></p>
                <p class="card-text"><?= $data['sis']['jurusan']; ?></p>
                <a href="<?= BASEURL; ?>/siswa ?>" class="card-link">Kembali</a>
            </div>
        </div>
    </div>
</div>