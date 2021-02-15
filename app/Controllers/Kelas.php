<?php

namespace App\Controllers;

use App\Models\Models_jurusan;
use CodeIgniter\Controller;
use App\Models\Models_kelas;


class Kelas extends Controller
{
    protected $table = 'kelas';
    public function __construct()
    {
        helper('form');
        $this->model = new Models_kelas();
        $this->jurusan = new Models_jurusan();
    }
    public function index()
    {

        $data = [

            'kelas' => $this->model->getAlldata(),
            'isi'    => 'kelas/index.php',

        ];

        echo view('kelas/index', $data);
    }

    public function tambah()
    {
        helper('form');
        $data = [
            'kelas' => $this->model->getAllData(),
            'jurusan' => $this->jurusan->getAllData(),
        ];

        echo view('Kelas/tambah', $data);
    }
    public function simpan()
    {
        $data = [
            'IDJurusan' => $this->request->getPost('IDJurusan'),
            'NamaKelas' => $this->request->getPost('NamaKelas'),
        ];
        $simpan =  $this->model->simpan($data);
        if ($simpan) {
            return redirect()->to('/Kelas');
        }
    }
}
