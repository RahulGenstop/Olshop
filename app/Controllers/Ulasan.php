<?php

namespace App\Controllers;

use App\Models\ulasanModel;

class ulasan extends BaseController
{
    public function index(): string
    {
        $ulasanModel = new ulasanModel();
        $data = [
            'tbulasan' => $ulasanModel->findAll(),
            'title' => "SIMATO || ulasan",
            'active' => "ulasan"
        ];
        return view('admin/ulasan/index', $data);
    }
    public function create()
    {
        $data = [
            'title' => "SIMATO || Ulasan",
            'judul' => "Tambah Ulasan",
            'active' => "Ulasan"
        ];
        return view('admin/Ulasan/create', $data);
    }
    public function store()
    {

        // Enkripsi kata sandi sebelum disimpan
        $hashedPassword = password_hash($this->request->getPost('kata_sandi'), PASSWORD_DEFAULT);

        // Tampung data ke dalam variabel $data
        $data = [
            'rating' => $this->request->getPost('rating'),
            'komentar' => $this->request->getPost('komentar'),
            'tanggal_dibuat' => date('Y-m-d H:i:s'),
        ];

        // Simpan data ke database menggunakan model
        $this->ulasanModel->insert($data);

        // Redirect ke halaman daftar pengguna dengan pesan sukses
        return redirect()->to('/ulasan')->with('success', 'Ulasan berhasil ditambahkan');
    }
}
