<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Mafia
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mafia/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari mafia.." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <h3>Daftar Mafia</h3>
            <ul class="list-group">
                <?php foreach ($data['maf'] as $maf) : ?>
                    <li class="list-group-item">
                        <?= $maf['nama']; ?>
                        <a href="<?= BASEURL; ?>/mafia/hapus/<?= $maf['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                        <a href="<?= BASEURL; ?>/mafia/ubah/ <?= $maf['id']; ?>" class="badge badge-success float-right mr-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $maf['id']; ?>">ubah</a>
                        <a href="<?= BASEURL; ?>/mafia/detail/ <?= $maf['id']; ?>" class="badge badge-primary float-right mr-1">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalLabel">Tambah Data Mafia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/mafia/tambah" method="post">
                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="number" class="form-control" id="nrp" name="nrp">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="Pengalaman">Pengalaman</label>
                        <select class="form-control" id="Pengalaman" name="pengalaman">
                            <option value="Coly">Coly</option>
                            <option value="No Bokep">No Bokep</option>
                            <option value=Judi">Judi</option>
                            <option value="Open Bo">Open Bo</option>
                            <option value="Bandar">Bandar</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>