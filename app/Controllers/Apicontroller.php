<?php

namespace App\Controllers;



class Apicontroller extends BaseController
{
    // public function __construct(){

    //     $this->db = \Config\Database::connect();

    // }
   

    public function index()
    {
        
    	echo "Santos API";
    }

    public function insert(){
        //Form Data
        $post = $this->request->getPost();
        $data = [

            'fname'     =>    $post['fname'],
            'lname'     =>    $post['lname'],
            'uname'     =>    $post['uname'],
            'password'  =>    md5($post['password']),
            'created_at' =>  date('Y-m-d H:i:s'),

        ];
        $db = \Config\Database::connect();
        $builder = $db->table("register");
        $result = $builder->insert($data);
        print_r($result);
       

    }
    public function insert_json(){
        //Json Data
        if($this->request->getMethod()=== 'post'){

            $content = trim(file_get_contents("php://input"));
            $decode = json_decode($content, true);
            $data = [

            'fname'     =>    $decode['fname'],

        ];
         echo "<pre>";
        print_r($data);

        }else{
            echo "Please Used Post Method";
        }    
             

    }

}
