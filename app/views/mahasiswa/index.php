<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group">
                    <input autocomplete="off" type="text" class="form-control" placeholder="Cari mahasiswa" name="keyword" id="keyword">
                    <button class="btn btn-primary" type="submit" id="cari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between"><?= $mhs['nama']; ?>
                        <div class="d-flex flex-row">
                            <a class="badge text-bg-warning d-flex justify-content-center align-items-center text-decoration-none ms-2" href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>">Detail</a>
                            <a data-id="<?= $mhs['id']; ?>" class="badge text-bg-primary d-flex justify-content-center align-items-center text-decoration-none ms-2 tampilModalEdit" href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id']; ?>" data-bs-toggle="modal" data-bs-target="#formModal">Edit</a>
                            <a onclick="return confirm('Yakin?')" class="badge text-bg-danger d-flex justify-content-center align-items-center text-decoration-none ms-2" href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>">Hapus</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="number" class="form-control" id="nrp" name="nrp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select id="jurusan" name="jurusan" class="form-select" aria-label="Default select example">
                            <option selected value="Agroekoteknologi">Agroekoteknologi</option>
                            <option value="Agribisnis">Agribisnis</option>
                            <option value="Kehutanan">Kehutanan</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>