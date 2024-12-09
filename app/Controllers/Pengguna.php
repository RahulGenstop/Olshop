<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class Pengguna extends BaseController
{
    protected $penggunaModel;
    public function __construct()
    {
        $this->penggunaModel = new PenggunaModel();
    }
    public function index(): string
    {
        $data = [
            'tbpengguna' => $this->penggunaModel->findAll(),
            'title' => "SIMATO || Pengguna",
            'judul' => "Data Pengguna",
            'active' => "pengguna"
        ];
        return view('admin/pengguna/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => "SIMATO || Pengguna",
            'judul' => "Tambah Pengguna",
            'active' => "pengguna"
        ];
        return view('admin/pengguna/create', $data);
    }

    public function store()
    {

        // Enkripsi kata sandi sebelum disimpan
        $hashedPassword = password_hash($this->request->getPost('kata_sandi'), PASSWORD_DEFAULT);

        // Tampung data ke dalam variabel $data
        $data = [
            'nama_pengguna' => $this->request->getPost('nama_pengguna'),
            'kata_sandi' => $hashedPassword, // Simpan kata sandi yang sudah dienkripsi
            'email' => $this->request->getPost('email'),
            'tanggal_dibuat' => date('Y-m-d H:i:s'),
        ];

        // Simpan data ke database menggunakan model
        $this->penggunaModel->insert($data);

        // Redirect ke halaman daftar pengguna dengan pesan sukses
        return redirect()->to('/pengguna')->with('success', 'Pengguna berhasil ditambahkan');
    }
}
