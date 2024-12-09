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
                    <form action="/kategori/store" method="post">
                        <div class="form-group">
                            <label>Nama Kategori </label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama_kategori" />
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input
                                type="text"
                                class="form-control"
                                name="deskripsi" />

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