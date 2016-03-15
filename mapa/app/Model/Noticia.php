<?php
class Noticia extends AppModel{
public $name = 'Noticia';
	      public $belongsTo = array(
          'Usuario' => array(
              'className' => 'Usuario',
              'foreignKey' => 'usuario_id',
          ), 'Disciplina');
	


}

?>