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
                            <label for="email2">Rating</label>
                            <input
                                type="text"
                                class="form-control"
                                name="rating" />
                        </div>
                        <div class="form-group">
                            <label for="email2">Komentar</label>
                            <input
                                type="text"
                                class="form-control"
                                name="komentar" />
                        </div>
                        <div class="form-group">
                            <label for="email2">Tanggal Dibuat</label>
                            <input
                                type="date"
                                class="form-control"
                                name="tanggal_dibuat" />
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>