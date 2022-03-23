<?php namespace App\Models;

use CodeIgniter\Model;

class ArticuloModel extends Model{
    protected $table = 'articulo';
    protected $allowedFields = ['title','descripcion','cuerpo'];

    public function getArticulos(){
        return $this->findAll();
    }
}