<?php

namespace App\Controllers;

use App\Models\Models_jurusan;
use App\Models\Models_kelas;
use CodeIgniter\Controller;
use App\Models\Models_siswa;

class Siswa extends Controller
{
    protected $Models_siswa;
    public function __construct()
    {
        $this->model = new Models_siswa();
        $this->kelas = new Models_kelas();
        $this->jurusan = new Models_jurusan();
    }
    public function index()
    {
        $data = [
            'siswa' => $this->model->getAllData(),
        ];
        echo view('siswa/index', $data);
    }

    public function tambah()
    {
        helper('form');
        $data = [
            'kelas' => $this->kelas->getAllData(),
            'jurusan' => $this->jurusan->getAllData(),
        ];

        echo view('Siswa/tambah', $data);
    }

    public function simpan()
    {
        $data = [
            'NamaSiswa' => $this->request->getPost('NamaSiswa'),
            'IDKelas' => explode("#0#", $this->request->getPost('IDKelas'))[0],
            'IDJurusan' => explode("#0#", $this->request->getPost('IDKelas'))[1],
        ];
        $success = $this->model->tambah($data);
        if ($success) {
            return redirect()->to('/Siswa');
        }
    }
}
