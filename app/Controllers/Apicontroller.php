<?php

namespace App\Controllers;

use App\Models\Usermdel;
use CodeIgniter\Controller;

class Apicontroller extends Controller
{
    public function __construct(){
        
        header("Access-Control-Allow-Origin: *");
        // $this->load->database();
        // $this->load->model('Usermodel', 'user_model');
    }

    public function index()
    {
        
    	echo "Santos API";
    }

    public function insert_form_data(){
        
        
        $data = [

            'fname'     =>    $post['fname'],
            'lname'     =>    $post['lname'],
            'uname'     =>    $post['uname'],
            'password'  =>    md5($post['password']),
            'created_at'    =>  date('Y-m-d H:i:s'),

        ];
        echo "string";
        // echo "<pre>";
        // print_r($data);      

    }

}
