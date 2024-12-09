<?php

namespace App\Controllers;

use App\Models\PesananModel;

class Pesanan extends BaseController
{
    protected $pesananModel;
    public function __construct()
    {
        $this->pesananModel = new PesananModel();
    }
    public function index(): string
    {
        $data = [
            'tbpesanan' => $this->pesananModel->findAll(),
            'title' => "SIMATO || Pesanan",
            'active' => "pesanan"
        ];
        return view('admin/pesanan/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => "SIMATO || Pesanan",
            'judul' => "Tambah Pesanan",
            'active' => "pesanan"
        ];
        return view('admin/pesanan/create', $data);
    }
    public function store()
    {

        // Enkripsi kata sandi sebelum disimpan

        // Tampung data ke dalam variabel $data
        $data = [
            'id_pengguna' => $this->request->getPost('id_pengguna'),
            'tanggal_pesanan' => $this->request->getPost('tanggal_pesanan'),
            'status' => $this->request->getPost('status'),
            'total_harga' => $this->request->getPost('total_harga'),
        ];

        // Simpan data ke database menggunakan model
        $this->pesananModel->insert($data);

        // Redirect ke halaman daftar pengguna dengan pesan sukses
        return redirect()->to('/pesanan')->with('success', 'Pesanan berhasil ditambahkan');
    }
}
