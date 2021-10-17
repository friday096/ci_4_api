<?php

namespace App\Controllers;

use App\Models\Usermdel;
use CodeIgniter\Controller;

class Apicontroller extends BaseController
{
    public function index()
    {
        return view('Form');
        //$modal = new Usermodel();
    	//echo "API";
        //return view('welcome_message');
    }

    public function insert(){


    }

}
