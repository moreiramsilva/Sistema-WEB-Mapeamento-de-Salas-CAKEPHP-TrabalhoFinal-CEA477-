

<?php echo $this->html->css('bootstrap.min');
  echo $this->html->script('bootstrap.min');      
?>
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
<h2>CADASTRAR SALAS</h2>
<fieldset>
<?php 
	echo $this->Form->create('Sala');
	echo $this->Form->input('nome');
	echo $this->Form->input('bloco',array('options'=>array('A' => 'A','B' => 'B','C' => 'C','D' => 'D','E' => 'E','H' => 'H')));
	echo $this->Form->input('andar',array('options'=>array('1'=>'1','2'=>'2','3'=>'3')));
	echo $this->Form->end('Save Post');
?>
</div>
</fieldset>
