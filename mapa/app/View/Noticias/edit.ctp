<?php echo $this->Html->css('bootstrap.min');?>
<div>
<div class="topo">
          <div class="conteiner"> 
            <div class="navbar">
              
              <div class="logo">
              </div>

              <div <nav class="nav navbar-right">

 <button type="button" class="btn btn-default">

      <?php  echo $this->Html->link("Editar Disciplina",array('controller' => 'Disciplinas','action' => 'index_adm')); ?>

    </button>



      <button type="button" class="btn btn-default">

      <?php  echo $this->Html->link("Cadastrar Disciplina",array('controller' => 'Disciplinas','action' => 'addi')); ?>

    </button>

    <button type="button" class="btn btn-default">

      <?php  echo $this->Html->link("Cadastrar Sala",array('controller' => 'Salas','action' => 'add')); ?>
    
    </button>

    <button type="button" class="btn btn-default">

        <?php  echo $this->Html->link("Postar Noticias",array('controller' => 'Noticias','action' => 'addn')); ?>

    </button>

     <button type="button" class="btn btn-default">

       <?php echo $this->Html->link("Editar Noticias",array('controller' => 'Noticias','action' => 'not_adm')); ?>

    </button>

    <button type="button" class="btn btn-default">

      <?php echo $this->Html->link("Editar Sala",array('controller' => 'Salas','action' => 'edit1')); ?>

    </button>

    <button type="button" class="btn btn-default">

      <?php echo $this->Html->link("Logout", array('controller' => 'Usuarios','action' => 'logout')); ?>
</button>

<p class="navbar-text navbar-right">Seja bem vindo <a href="#" class="navbar-link">
    <?php 
      $cliente = $this->Session->read('Usuario');
      $id = $cliente['0']['Usuario']['nome']; 
      echo $id;?>
      </a>
</p>

      

            </div>  
          </div>
</div>
</div>
<div class="form">

<h1>EDITAR NOTICIA</h1>
<fieldset>

<?php
echo $this->Form->create('Noticia');
echo $this->Form->input('post', array('rows' => '3'));

$data = date('Y-m-d H:i:s');
echo $this->Form->hidden('data', array('value'=>$data));


$cliente = $this->Session->read('Usuario');
$id = $cliente['0']['Usuario']['id'];	
echo $id;
echo $this->Form->hidden('usuario_id',array('value'=>$id));

echo $this->Form->select('disciplina_id', $disciplina, array('empty' => 'Selecione:'));
echo $this->Form->end('Salvar');

?>
</fieldset>
</div>
</div>
