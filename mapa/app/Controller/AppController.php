<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

  public function afterFilter() {


  if($this->action != 'contato' && $this->action != 'index_login' &&  $this->action != 'index' && $this->action != 'display' 
    && $this->action != 'sobre' && $this->action != 'view' && $this->action != 'mapa') {//Verifica se tem alguem logado
     $this->autenticar();
  }

  if($this->Session->check('Usuario')){// Verifica se é um usuario administrador
    $admin = $this->Session->read('Usuario');
    $tipo = $admin['0']['Usuario']['tipo'];

    /*$this->action == 'index_adm' ||*/

    if ($tipo == 1){ // Verifica se é um Professor
      if ( $this->action == 'addu'|| $this->action == "edit1" || $this->action == 'add'){
        $this->Flash->set('Acesso permitido somente para Tecnico!');
        $this->redirect(array('controller' => 'Disciplinas',
          'action' => 'index_adm'));
      }
    }
    else if ($tipo == 2){// Verifica se é um Tecnico
      if($this->action == 'index' || $this->action == 'addn' || $this->action == 'not_adm'){
        $this->Flash->set('Acesso permitido somente para Professor!');
        $this->redirect(array('controller' => 'Disciplinas',
          'action' => 'index_adm'));
      }
    }
  }
}

    public function autenticar() {

      if(!$this->Session->check('Usuario')) {
        $this->redirect(array('controller' => 'Usuarios',
          'action' => 'index_login'));
        exit();
      }

    }



  }