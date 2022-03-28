<?php
    
namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\UsuarioModel;

class Usuario extends Controller{
    //Funcion crear del formulario

    public function index(){
        $model = new UsuarioModel();
        if ($this->request->getMethod() === 'post'){
            $u = $this->request->getPost('user');
            $usuario = $model->getuser($u);
            $p= $this->request->getPost('pass');
            if($p == $usuario['pass']){
                echo view('templates/header', ['title' => 'Has iniciado sesión correctamente']);
                echo view( 'usuario/entrar_view');
                echo view('templates/footer');
            }
            else{
                echo view('templates/header', ['title' => 'Login usuario, usuario/contraseña incorrecto']);
                echo view('usuario/login_view');
                echo view('templates/footer');
            }
        }
        else{
            echo view('templates/header', ['title' => 'Login usuario']);
            echo view('usuario/login_view');
            echo view('templates/footer');
            
        }
    }

    public function create(){
        $model = new UsuarioModel();
        if ($this->request->getMethod() === 'post')
        {
            $model->save([
            'name' => $this->request->getPost('name'),
            'correo' => $this->request->getPost('correo'),
            'user' => $this->request->getPost('user'),
            'pass' => $this->request->getPost('pass'),
            'pass2' => $this->request->getPost('pass2')
            ]);

            echo view('templates/header', ['title' => 'Login usuario']);
            echo view('usuario/login_view');
            echo view('templates/footer');

        }
        
        
    else{

        echo view('templates/header', ['title' => 'Registrar usuario']);
        echo view('usuario/register_view');
        echo view('templates/footer');
    }
  
}

}