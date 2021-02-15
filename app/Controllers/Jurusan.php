<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Models_jurusan;

class Jurusan extends BaseController
{
    public function __construct()
    {
        $this->model = new Models_jurusan();
    }
    public function index()
    {
        $data = [
            'jurusan' => $this->model->getAllData()
        ];

        echo view('jurusan/index', $data);
    }
    public function tambah()
    {
        helper('form');

        echo view('jurusan/tambah');
    }
    public function simpan()
    {
        $data = [
            'IDJurusan' => $this->request->getPost('IDJurusan'),
            'NamaJurusan' => $this->request->getPost('NamaJurusan'),
        ];
        $simpan =  $this->model->simpan($data);
        if ($simpan) {
            return redirect()->to('/Jurusan');
        }
    }
}
