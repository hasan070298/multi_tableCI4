<?php

namespace App\Models;

use CodeIgniter\Model;

class Models_jurusan extends Model
{

    public function getAllData()
    {
        return $this->db->table('jurusan')->get()->getResultArray();
    }
    public function simpan($data)
    {
        return $this->db->table('jurusan')->insert($data);
    }
}
