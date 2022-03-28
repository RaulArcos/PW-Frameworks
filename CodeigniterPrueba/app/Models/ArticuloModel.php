<?php namespace App\Models;

use CodeIgniter\Model;

class ArticuloModel extends Model{
    protected $table = 'articulo';
    protected $allowedFields = ['title','descripcion','cuerpo'];

    public function getArticulos($id = false){
        if($id === false)
            return $this->findAll();
        return $this->asArray()
                    ->where(['id' => $id])
                    ->first();
    }
}