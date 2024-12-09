<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => "SIMATO || Dashboard",
            'active' => "home"
        ];
        return view('admin/index', $data);
    }
}
