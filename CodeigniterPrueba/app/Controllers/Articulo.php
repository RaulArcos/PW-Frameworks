<?php namespace App\Controllers;

use CodeIgniter\Controller;
use app\Models\ArticuloModel;

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
    public function view($iId = NULL){
       
        $model = new ArticuloModel();
        $data['articulos'] = $model->getArticulos($iId);

        if(empty($data['articulos']))
            throw new \CodeIgniter\Exceptions\PageNotFoundException('No existe el artículo con la id'. $iId);

        $data['title'] = 'Articulos';

        echo view('templates/header',$data);
        echo view('articulo/unarticulo',$data);
        echo view('templates/footer',$data);
    }
} 