<?php

namespace App\Controllers;


class MaxController extends BaseController
{


    public function __construct()
    {

    }

    public function index()
    {
        return view('homepage');
    }
    
}