<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{
    
    public function index()
    {
        $mahasiswa = new MahasiswaModel();
        return view('index', [
            "data" => $mahasiswa->getNama(),
            "nim" => $mahasiswa->getNim(),
            "asal_prodi" => $mahasiswa->getAsalPrody(),
            "hoby" => $mahasiswa->getHoby(),
            "skills" => $mahasiswa-> getSkill(),
            "foto1" => $mahasiswa-> getFoto1()
            
        ]);
    }

    
    public function biodata()
    {
        $mahasiswa = new MahasiswaModel();
        return view('biodata', [
            "data" => $mahasiswa->getNama(),
            "foto1" => $mahasiswa->getFoto1(),
            "nim" => $mahasiswa->getNim(),
            "asal_prodi" => $mahasiswa->getAsalPrody(),
            "hoby" => $mahasiswa->getHoby(),
            "skills" => $mahasiswa-> getSkill(),
        ]);
    }
}
