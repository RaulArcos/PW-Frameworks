<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Articulo extends Controller{
    public function index(){
        return view('welcome_message');
    }
    public function view($page = 'home'){
        if(!is_file(APPPATH.'/Views/articulo/'.$page.'.php'))
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);

        $data['title'] = ucfirst($page);

        echo view('template/header',$data);
        echo view('articulo/'.$page,$data);
        echo view('template/footer',$data);
    }
} 