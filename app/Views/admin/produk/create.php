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
                    <form action="/produk/store" method="post">
                        <div class="form-group">
                            <label for="email2">Nama Produk</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama_produk" />
                        </div>
                        <div class="form-group">
                            <label for="email2">Deskripsi</label>
                            <input
                                type="text"
                                class="form-control"
                                name="deskripsi" />
                        </div>
                        <div class="form-group">
                            <label for="email2">harga</label>
                            <input
                                type="text"
                                class="form-control"
                                name="harga" />
                        </div>
                        <div class="form-group">
                            <label for="email2">Stok</label>
                            <input
                                type="text"
                                class="form-control"
                                name="stok" />
                        </div>
                        <div class="form-group">
                            <label for="email2">Tanggal_Dibuat</label>
                            <input
                                type="date"
                                class="form-control"
                                name="tanggal_dibuat" />
                        </div>
                        <div class="form-group">
                            <label for="email2">Kategori</label>
                            <input
                                type="text"
                                class="form-control"
                                name="id_kategori" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="/produk" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>