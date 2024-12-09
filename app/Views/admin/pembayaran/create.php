<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title"><?= $judul; ?></h4>
                </div>
                <div class="card-body">
                    <div class="col-md-6 col-lg-6">
                        <form action="/pembayaran/store" method="post">
                            <div class="form-group">
                                <label for="tanggal_pembayaran">Tanggal Pembayaran</label>
                                <input
                                    type="date"
                                    class="form-control"
                                    id="tanggal_pembayaran"
                                    name="tanggal_pembayaran"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="jumlah"
                                    name="jumlah"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="metode_pembayaran">Metode Pembayaran</label>
                                <select
                                    class="form-control"
                                    id="metode_pembayaran"
                                    name="metode_pembayaran"
                                    required>
                                    <option value="">Pilih Metode Pembayaran</option>
                                    <option value="kartu Kredit">Kartu Kredit</option>
                                    <option value="Transfer">Transfer Bank</option>
                                    <option value="Paypal">PayPal</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select
                                    class="form-control"
                                    id="status"
                                    name="status"
                                    required>
                                    <option value="">Pilih Status Pembayaran</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Gagal">Gagal</option>
                                </select>
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <a href="/pembayaran" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>