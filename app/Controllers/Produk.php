<?php

namespace App\Controllers;

use App\Models\produkModel;

class Produk extends BaseController
{
    protected $produkModel;
    public function __construct()
    {
        $this->produkModel = new produkModel();
    }
    public function index(): string
    {
        $data = [
            'tbproduk' => $this->produkModel->findAll(),
            'title' => "SIMATO || produk",
            'active' => "produk"
        ];
        return view('admin/produk/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => "SIMATO || Produk",
            'judul' => "Tambah Produk",
            'active' => "Produk"
        ];
        return view('admin/Produk/create', $data);
    }
    public function store()
    {

        // Tampung data ke dalam variabel $data
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'tanggal_dibuat' => $this->request->getPost('tanggal_dibuat'),
            'id_kategori' => $this->request->getPost('id_kategori'),
        ];
        // var_dump($data);
        // exit;
        // Simpan data ke database menggunakan model
        $this->produkModel->insert($data);

        // Redirect ke halaman daftar pengguna dengan pesan sukses
        return redirect()->to('/produk')->with('success', 'Pembayaran berhasil ditambahkan');
    }
}
