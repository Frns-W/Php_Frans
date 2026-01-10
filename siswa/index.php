<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/all.css">
</head>

<body style="background-color:#d1e6d4">
    <?php
    include_once("../navbar.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-10 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header">
                        <b>BIODATA SISWA</b>
                        <a href="form_tambah.php" class="float-end btn btn-primary btn-sm"><i
                                class="fa-solid fa-user-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="row">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Action</th>
                                </tr>

                            </thead>
                            <tbody>

                                <?php
                                # koneksi
                                include("../koneksi.php");
                                # menuliskan query menampilkan data
                                $qry = "SELECT * FROM biodata";
                                # menjalankan query
                                $tampil = mysqli_query($koneksi, $qry);
                                # looping hasil query
                                $nomor = 1;
                                foreach ($tampil as $data) {

                                    ?>
                                    <tr>
                                        <th scope="row"><?= $nomor++ ?></th>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['nisn'] ?></td>
                                        <td><?= $data['tgl_lahir'] ?></td>
                                        <td>

                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal<?= $data['id'] ?>">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>

                                            <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalEdit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>

                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalDelete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>



                                            <div class="modal fade" id="exampleModal<?= $data['id'] ?>" tabindex="-1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-warning">
                                                            <h5 class="modal-title">Detail Data</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Nama</td>
                                                                        <th scope="row"><?= $data['nama'] ?></th>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="modalEdit" tabindex="-1">
                                                <div class="modal-dialog">
                                                    <form class="modal-content">
                                                        <div class="modal-header bg-info">
                                                            <h5 class="modal-title">Edit Data</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"></button>
                                                        </div>

                                                

                                                </form>
                                            </div>
                        </div>


                        <div class="modal fade" id="modalDelete" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title">Hapus Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">
                                        <p>Apakah kamu yakin ingin menghapus data ini?</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <a href="proses_hapus.php?.id=<? $id['id'] ?> " class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </td>
                        </tr>

                        <?php
                                }
                                ?>


                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script src="../js/all.js"></script>
</body>

</html>