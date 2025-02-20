<?php

namespace App\Controllers;

use Config\View;

class cAbout extends BaseController
{
    public function index()
    {
        return View('about');
    }
}
