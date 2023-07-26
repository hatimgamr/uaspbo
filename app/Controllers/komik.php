<?php

namespace App\Controllers;

use App\Models\komikModel;



class komik extends BaseController
{
    protected $komikmodel;
    public function __construct()
    {
        $this->komikmodel = new komikModel();
    }

    public function index()
    {
        $komik = $this->komikmodel->findAll();
        $data = [
            'title' => 'daftar komik',
            'komik' => $komik
        ];




        return view('komik/index', $data);
    }
}
