<?php
class UsuariosController extends AppController {

  public $helpers = array('Form');
  public $components = array('Flash');

 public function index_login() {

  }


 public function index_prof() {

  }

  
public function validar(){

$usuario = $this->Usuario->findAllByUsuariosAndSenha($this->data['Usuario']['usuarios'], $this->data['Usuario']['senha']);

if(!empty($usuario)){
  return $usuario;
}else{
  return false;}

}

  public function adda(){

      if ($this->Usuario->save($this->request->data)) {
            $this->Flash->set('Usuario Inserido com Sucesso!');
            $this->redirect(array('action' => 'index_login'));
  }
}

  public function login(){

if(!empty($this->data['Usuario']['usuarios'])){
  
  $usuario = $this->validar();


  if($usuario != false){
    
    $this->Flash->set('Acesso realizado com sucesso!');
    $this->Session->write('Usuario', $usuario);
    $this->redirect(array('action'=>'index_prof'));
    exit();

  }else {
    $this->Flash->set('Usuario e/ou senha invalidos!');
    $this->redirect(array('action'=>'index_login'));
    exit();
  }
}
}

  public function logout() {

    $this->Session->destroy();
    $this->Flash->set('Atividades encerradas com sucesso!');

    $this->redirect(array('action' => 'index_login'));
    exit();

  }

}


?>