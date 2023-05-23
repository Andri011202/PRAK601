<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $nama = "Andri Rahmadani";
    protected $foto1 = "Andri.JPG";
    protected $NIM = "2110817110008";
    protected $asal_prodi = "Teknologi Informasi";
    protected $hoby = "Ngoding dan desain grafis";
    protected $skill = "Desain Grafis, C++, PHP, HTML, CSS";

    public function getNama()
    {
        return $this->nama;
    }

    public function getFoto1()
    {
        return $this->foto1;
    }

    public function getNim()
    {
        return $this->NIM;
    }

    public function getAsalPrody() {
        return $this->asal_prodi;
    }

    public function getHoby()
    {
        return $this->hoby;
    }

    public function getSkill() {
        return $this->skill;
    }
}
