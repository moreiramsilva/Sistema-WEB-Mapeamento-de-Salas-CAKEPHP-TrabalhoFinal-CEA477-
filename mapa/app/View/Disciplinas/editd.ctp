<?php echo $this->Html->css('bootstrap.min');?>
<div class="topo">
          <div class="conteiner"> 
            <div class="navbar">
              
              <div class="logo">
              </div>


 <div <nav class="nav navbar-right">
                 <button type="button" class="btn btn-default">

      <?php  echo $this->Html->link("Editar Disciplinas",array('controller' => 'Disciplinas','action' => 'index_adm')); ?>

    </button>
              <div <nav class="nav navbar-right">
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
</div>
<h1>Edit Produto</h1>
<?php
    echo $this->Form->create('Disciplina', array('action' => 'editd'));
    echo $this->Form->input('codigo',array('class' => 'form-control'));
    echo $this->Form->input('nome',array('class' => 'form-control'));
    echo $this->Form->input('professor',array('class' => 'form-control'));

    echo $this->Form->input('dia1', array(
            'options' => array('Segunda'=>'Segunda','Terca'=>'Terca','Quarta'=>'Quarta','Quinta'=>'Quinta','Sexta'=>'Sexta')));

echo $this->Form->input('horario1', array(
            'options' => array('14:20' => '14:20', '16:20' => '16:20', '19:00' => '19:00', '21:00' => '21:00')
        ));

echo $this->Form->input('dia2', array(
            'options' => array('Segunda'=>'Segunda','Terca'=>'Terca','Quarta'=>'Quarta','Quinta'=>'Quinta','Sexta'=>'Sexta')));

echo $this->Form->input('horario2', array(
            'options' => array('14:20' => '14:20', '16:20' => '16:20', '19:00' => '19:00', '21:00' => '21:00')
        ));

    echo $this->Form->input('curso',array('class' => 'form-control'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->select('sala_id', $salas,
        array('empty' => 'Selecione:'));
    
    echo $this->Form->end('Salvar');

?>

<div class="rodape">
  <p class="panel panel-primary">CEA477 - Sistemas para a WEB I</p>
</div>