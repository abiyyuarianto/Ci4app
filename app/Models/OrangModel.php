<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
    protected $table = 'orang';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'alamat'];

    public function search($keyword)
    {
        // $builder = $this->table('orang');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('orang')->like('nama', $keyword)->orLike('alamat', $keyword);
    }

    public function get($username){
        // $this->db->where('nama', $username); // Untuk menambahkan Where Clause : username='$username'
        // $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        // return $result;
    }
}
