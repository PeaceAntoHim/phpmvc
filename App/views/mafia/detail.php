<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['maf']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['maf']['nrp']; ?></h6>
            <p class="card-text"><?= $data['maf']['email']; ?></p>
            <p class="card-text"><?= $data['maf']['pengalaman']; ?></p>
            <a href="<?= BASEURL; ?>/mafia" class="card-link">kembali</a>
        </div>
    </div>
</div>