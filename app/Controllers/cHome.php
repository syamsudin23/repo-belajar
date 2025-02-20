<?php

namespace App\Controllers;
 
class cHome extends BaseController
{
    public function index()
    {
        return view('home');
    }
}
