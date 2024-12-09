<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="page-inner">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <<div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Basic</h4>
                        <!-- Tombol Tambah -->
                        <a href="/pembayaran/create" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            id="basic-datatables"
                            class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Jumlah</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($tbpembayaran as $key => $value) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['tanggal_pembayaran']; ?></td>
                                        <td><?= $value['jumlah']; ?></td>
                                        <td><?= $value['metode_pembayaran']; ?></td>
                                        <td><?= $value['status']; ?></td>
                                        <td>
                                            <!-- Tombol Ubah -->
                                            <a href="" class="btn btn-warning btn-sm">
                                                Ubah
                                            </a>
                                            <!-- Tombol Hapus -->
                                            <button class="btn btn-danger btn-sm btn-delete" data-id="">
                                                Hapus
                                            </button>
                                        </td>


                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<?= $this->endSection(); ?>