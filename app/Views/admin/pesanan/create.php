<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="page-inner">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title"><?= $judul; ?></h4>
                </div>
                <div class="col-md-6 col-lg-6">
                    <form action="/pesanan/store" method="post">
                        <div class="form-group">
                            <label for="email2">Nama Pengguna</label>
                            <input
                                type="text"
                                class="form-control"
                                name="id_pengguna" />
                        </div>
                        <div class="form-group">
                            <label for="email2">Tanggal Pesanan</label>
                            <input
                                type="date"
                                class="form-control"
                                name="tanggal_pesanan" />
                        </div>
                        <div class="form-group">
                            <label for="email2">Status</label>
                            <input
                                type="text"
                                class="form-control"
                                name="status" />
                        </div>
                        <div class="form-group">
                            <label for="email2">Total harga</label>
                            <input
                                type="text"
                                class="form-control"
                                name="total_harga" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="/pesanan" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>