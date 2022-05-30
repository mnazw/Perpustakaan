<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class FindUser extends BaseController
{
    protected $usermodel;
    protected $pager;
    public function __construct()
    {
       $this->usermodel = new UserModel();
       $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        $this->key = $this->request->getVar('cari');
        if ($this->key) {
            $query = $this->usermodel->findUser($this->key);
            $status = "User ditemukan!";
        } else {
            $query = $this->usermodel;
            $status = "";
        }

        $data['user'] = $query->paginate(10);
        $data['pager'] = $this->usermodel->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $data['status'] = $status;

        echo view("component/header");
        echo view("component/sidebar");
        echo view("component/navbar");
        echo view("finduser", $data);
        echo view("component/footer");
    }
}
