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
                        <a href="/item_pesanan/create" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            id="basic-datatables"
                            class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>jumlah</th>
                                    <th>harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($tbitem_pesanan as $key => $value) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['jumlah']; ?></td>
                                        <td><?= $value['harga']; ?></td>
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