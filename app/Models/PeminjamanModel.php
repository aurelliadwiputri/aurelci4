<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table            = 'peminjaman';
    protected $primaryKey       = 'PeminjamanId';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['UserId', 'BukuId', 'TanggalPeminjaman', 'TanggalPengembalian', 'StatusPeminjaman'];
 
    
    public function getPeminjaman()
    {
        return $this->select('peminjaman.*, username as user_name, judul as buku_title')
                    ->join('user', 'user.UserID = peminjaman.UserId')
                    ->join('buku', 'buku.id = peminjaman.BukuId')
                    ->findAll();
    }
}
