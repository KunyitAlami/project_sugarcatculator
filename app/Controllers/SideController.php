<?php

namespace App\Controllers;

class SideController extends BaseController
{
    public function index(): string
    {
        return view('side/homepage');
    }
}
