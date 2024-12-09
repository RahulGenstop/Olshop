<?php

namespace App\Controllers;

use App\Models\kategoriModel;

class kategori extends BaseController
{
    protected $kategoriModel;
    public function __construct()
    {
        $this->kategoriModel = new kategoriModel();
    }
    public function index(): string
    {
        $data = [
            'tbkategori' => $this->kategoriModel->findAll(),
            'title' => "SIMATO || kategori",
            'active' => "kategori"
        ];
        return view('admin/kategori/index', $data);
    }
    public function create()
    {
        $data = [
            'title' => "SIMATO || Kategori",
            'judul' => "Kategori",
            'active' => "kategori"
        ];
        return view('admin/kategori/create', $data);
    }

    public function store()
    {
        // Tampung data ke dalam variabel $data
        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'deskripsi' => $this->request->getPost('deskripsi'), // Simpan kata sandi yang sudah dienkripsi
        ];

        // Simpan data ke database menggunakan model
        $this->kategoriModel->insert($data);

        // Redirect ke halaman daftar pengguna dengan pesan sukses
        return redirect()->to('/kategori')->with('success', 'Kategori berhasil ditambahkan');
    }
}
