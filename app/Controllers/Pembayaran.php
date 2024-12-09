<?php

namespace App\Controllers;

use App\Models\PembayaranModel;

class Pembayaran extends BaseController
{
    protected $pembayaranModel;
    public function __construct()
    {
        $this->pembayaranModel = new PembayaranModel();
    }
    public function index(): string
    {
        $pembayaranModel = new PembayaranModel();
        $data = [
            'tbpembayaran' => $pembayaranModel->findAll(),
            'title' => "SIMATO || Pembayaran",
            'active' => "pembayaran"
        ];
        return view('admin/pembayaran/index', $data);
    }
    public function create()
    {
        $data = [
            'title' => "SIMATO || Pembayaran",
            'judul' => "Tambah Pembayaran",
            'active' => "pembayaran"
        ];
        return view('admin/pembayaran/create', $data);
    }

    public function store()
    {

        // Tampung data ke dalam variabel $data
        $data = [
            'id_pesanan' => $this->request->getPost('id_pesanan'),
            'tanggal_pembayaran' => $this->request->getPost('tanggal_pembayaran'),
            'jumlah' => $this->request->getPost('jumlah'),
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
            'status' => $this->request->getPost('status'),
        ];

        // Simpan data ke database menggunakan model
        $this->pembayaranModel->insert($data);

        // Redirect ke halaman daftar pengguna dengan pesan sukses
        return redirect()->to('/pembayaran')->with('success', 'Pembayaran berhasil ditambahkan');
    }
}
