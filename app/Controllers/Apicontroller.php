<?php

namespace App\Controllers;



class Apicontroller extends BaseController
{
   

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
        echo "<pre>";
        print_r($data);      

    }
        public function again_insert(){
        //Form Data
        $post = $this->request->getPost();
        $data_dict=json.loads(request.body.decode('utf-8'))
        $data = [

            'fname'     =>    $data_dict['fname'],
            // 'lname'     =>    $post['lname'],
            // 'uname'     =>    $post['uname'],
            // 'password'  =>    md5($post['password']),
            // 'created_at' =>  date('Y-m-d H:i:s'),

        ];
        echo "<pre>";
        print_r($data);      

    }

}
