<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){
        $data['nama'] = 'Azmi';
        $data['list'] = ['SMA Negeri 9 Kota Bogor', 'Universitas Sebelas Maret'];
        echo view("component/header");
        echo view("component/sidebar");
        echo view("component/navbar");
        echo view("Home", $data);
        echo view("component/footer");
    }
}
