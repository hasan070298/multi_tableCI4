<?php

namespace App\Models;

use CodeIgniter\Model;

class Models_kelas extends Model
{
    protected $table = 'kelas';

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->builder();
    }
    public function getAllData()
    {

        return $this->builder()
            ->join('jurusan', 'jurusan.IDJurusan=kelas.IDJurusan')
            ->get()->getResultArray();
    }
    public function simpan($data)
    {
        return $this->builder()->insert($data);
    }
}
