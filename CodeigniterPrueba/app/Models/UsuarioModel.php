<?php namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $allowedFields = ['name', 'correo', 'user', 'pass', 'pass2'];
    public function getUser($u)
    {
        return $this->asArray()
                    ->where(['user' => $u])
                     ->first();
    }
}       