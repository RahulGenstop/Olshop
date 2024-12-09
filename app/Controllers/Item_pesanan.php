<?php

namespace App\Controllers;

use App\Models\Item_pesananModel;

class Item_pesanan extends BaseController
{
    public function index(): string
    {
        $Item_pesananModel = new Item_pesananModel();
        $data = [
            'tbitem_pesanan' => $Item_pesananModel->findAll(),
            'title' => "SIMATO || Item_pesanan",
            'active' => "Item_pesanan"
        ];
        return view('admin/Item_pesanan/index', $data);
    }
    public function create()
    {
        $data = [
            'title' => "SIMATO || Item_pesanan",
            'judul' => "Tambah Item_pesanan",
            'active' => "Item_pesanan"
        ];
        return view('admin/Item_pesanan/create', $data);
    }
    public function store()
    {
        // Tampung data ke dalam variabel $data
        $data = [
            'jumlah' => $this->request->getPost('jumlah'),
            'harga' => $this->request->getPost('harga'), // Simpan kata sandi yang sudah dienkripsi
        ];

        // Simpan data ke database menggunakan model
        $this->item_pesananModel->insert($data);

        // Redirect ke halaman daftar pengguna dengan pesan sukses
        return redirect()->to('/item_pesanan')->with('success', 'Item berhasil ditambahkan');
    }
}
