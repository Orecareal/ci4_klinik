<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        //
        $context = [
            'title'=>'Dashboard'
        ];
        return view('pages/home', $context);
    }
}
