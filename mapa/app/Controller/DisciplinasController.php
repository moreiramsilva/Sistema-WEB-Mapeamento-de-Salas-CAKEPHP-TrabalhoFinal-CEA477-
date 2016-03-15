<?php

class DisciplinasController extends AppController{
	
public function view($id = null) {

    /*$teste = $this->Disciplina->findAllBysala_id($id);
    Debugger::dump($teste);*/
    $this->set('disciplinas',  $this->Disciplina->findAllBysala_id($id));
 }


 function index() {
        $this->set('disciplinas', $this->Disciplina->find('all'));
    }

 function index_adm() {
        $this->set('disciplinas', $this->Disciplina->find('all'));
    }

     public function addi() {

    if (empty($this->request->data)) {
        // Campos para insercao
        $salas = $this->Disciplina->Sala->find('list',
          array('fields' => array('id', 'nome')));

        $this->set('salas', $salas);
    }
     else{ 

     if ($this->Disciplina->save($this->request->data)) {
            $this->Flash->set('Disciplina Inserido com Sucesso!');
            $this->redirect(array('action' => 'index_adm'));
        }
    }
}

    public function editd($id = null){


     $this->Disciplina->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Disciplina->findById($id);
        $salas = $this->Disciplina->Sala->find('list',
          array('fields' => array('id', 'nome')));

        $this->set('salas', $salas);
    } else {
        if ($this->Disciplina->save($this->request->data)) {
            $this->Flash->success('Sua Disciplina foi bem editada.');
            $this->redirect(array('action' => 'index_adm'));
        }
    }

  }


    function delete($id) {
    $this->Disciplina->delete($id);
    $this->Flash->set('Disciplina Excluida com Sucesso!');
    $this->redirect(array('action' => 'index_adm'));
}

}

?>