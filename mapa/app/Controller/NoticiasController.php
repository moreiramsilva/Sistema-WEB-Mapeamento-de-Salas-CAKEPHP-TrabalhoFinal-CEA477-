		<?php
		class NoticiasController extends AppController{

		public function index(){
				  $this->set('noticias', $this->Noticia->find('all',
    		array('order' => array('Noticia.data' => 'desc'))));
		}

		public function not_adm(){
				  

				$cliente = $this->Session->read('Usuario');
  				  $cliente = $cliente['0']['Usuario']['id'];
   				 $this->set('noticias', $this->Noticia->findAllByusuario_id($cliente));


				/*  $this->set('noticias', $this->Noticia->find('all',
    		array('order' => array('Noticia.data' => 'desc'))));*/
		}

		public function addn(){
				  	
				  	if (empty($this->request->data)) {
	        		// Campos para insercao
	       			 $disciplina = $this->Noticia->Disciplina->find('list',array('fields' => array('nome')));

	       			 $this->set('disciplina', $disciplina);
	    } else {


				  if ($this->Noticia->save($this->request->data)) {
				              $this->Flash->set('Postado com Sucesso!');
				              $this->redirect(array('action' => 'index'));
				  }
				  }
				}

		public function view($codigo = null) {

				    if (!$codigo) {
				      throw new NotFoundException("Post Inválido!");
				    }

				    $noticias = $this->Noticia->findById($codigo);
				    $this->set('noticias', $noticias);

				  }

		public function edit($id = null){

			     $this->Noticia->id = $id;

			     if (empty($this->request->data)) {
	        		// Campos para insercao
	       			 $disciplina = $this->Noticia->Disciplina->find('list',array('fields' => array('nome')));

	       			 $this->set('disciplina', $disciplina);
	    		} else {
			    if ($this->request->is('get')) {
			        $this->request->data = $this->Noticia->findById($id);
			    } else {
			        if ($this->Noticia->save($this->request->data)) {
			            $this->Flash->success('Post foi editado.');
			            $this->redirect(array('action' => 'index'));
			        }
			    }}
			  }

		public function delete($id) {
			    $this->Noticia->delete($id);
			    $this->Flash->set('Post Excluido com Sucesso!');
			    $this->redirect(array('action' => 'index'));
			}
		
		public function sobre(){
		}

		public function contato(){
		}

		}
		?>

