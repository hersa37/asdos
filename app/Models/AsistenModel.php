<?php

namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'asisten';
    protected $primaryKey = 'nim';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['nim', 'nama', 'praktikum', 'ipk'];

    // Dates
    protected $useTimestamps = false;

    public function index()
    {
        return $this->findAll();
    }

    public function simpan($record)
    {
        $this->save([
            'nim' => $record['nim'],
            'nama' => $record['nama'],
            'praktikum' => $record['praktikum'],
            'ipk' => $record['ipk'],
        ]);
    }

    public function ambil($nim)
    {
        return $this->where('nim',$nim)->first();
    }
}
