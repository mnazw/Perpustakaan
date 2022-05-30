<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    protected $usermodel;
    public function __construct()
    {
       $this->usermodel = new UserModel();
    }

    public function index()
    {
        $data = [
            'nav' => 'Administrator',
            'link' => 'user',
            'list' => $this->usermodel
            // 'list' => $this->usermodel->find([1])
            // 'list' => $this->usermodel->where('username', 'mnazw')->find()
            // 'list' => $this->usermodel->where('avatar', '')->find()

        ];
        echo view("component/header");
        echo view("component/sidebar");
        echo view("component/navbar");
        echo view("User", $data);
        echo view("component/footer");
    }
}
