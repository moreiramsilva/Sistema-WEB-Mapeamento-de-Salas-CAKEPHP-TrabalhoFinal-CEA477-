			<?php

			class SalasController extends AppController{

			public $helpers = array('Js' => array('Jquery'));


			public function index(){
			  $this->set('salas', $this->Sala->find('all'));
			}

			public function edit1(){
			  $this->set('salas', $this->Sala->find('all'));
			}
			public function add(){
			  	
			  if ($this->Sala->save($this->request->data)) {
			              $this->Flash->set('Sala cadastradas com Sucesso!');
			              $this->redirect(array('action' => 'edit1'));
			  }
			  }

			public function edit($id = null){

		     $this->Sala->id = $id;
		    if ($this->request->is('get')) {
		        $this->request->data = $this->Sala->findById($id);
		    } else {
		        if ($this->Sala->save($this->request->data)) {
		            $this->Flash->success('Sua Sala foi editada.');
		            $this->redirect(array('action' => 'index'));
		        }
		    }
		  }

		    public function delete($id) {
		    $this->Sala->delete($id);
		    $this->Flash->set('Sala Excluida com Sucesso!');
		    $this->redirect(array('action' => 'index'));
		}

		public function mapa(){
		}

	}
	?>