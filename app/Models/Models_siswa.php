<?php

namespace App\Models;

use CodeIgniter\Model;

class Models_siswa extends Model
{
    public function getAlldata()
    {
        return $this->db->table('siswa')
            ->join('kelas', 'kelas.IDKelas=siswa.IDKelas')
            ->join('jurusan', 'jurusan.IDJurusan=siswa.IDJurusan')
            ->get()->getResultArray();
    }
    public function tambah($data)
    {
        return $this->db->table('siswa')->insert($data);
    }
}
