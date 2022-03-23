<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Articulo extends Controller{
    public function index(){
        $model = new ArticuloModel();
            $data = [
                'articulos' => $model->getArticulos(),
                'title' => 'Bienvenido a la web de Articulos',
            ];

        echo view('templates/header', $data);
        echo view('articulo/overview', $data);
        echo view('templates/footer', $data);
    }
    public function view($page = 'home'){
        if(!is_file(APPPATH.'/Views/articulo/'.$page.'.php'))
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);

        $data['title'] = ucfirst($page);

        echo view('templates/header',$data);
        echo view('articulo/'.$page,$data);
        echo view('templates/footer',$data);
    }
} 