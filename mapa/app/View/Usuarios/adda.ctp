<?php echo $this->Html->css('bootstrap.min');?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
  
    <div class="navbar-header">
      
      <a class="navbar-brand" href="../pages/home">
        <img alt="Teste" src="..\img\Logo2.png">
      </a>
    </div>
  </div>
</nav>
<div class="container">
<h2>Adicionar Novo Usuário</h2>

<div class="Clientes form">

<?php

	echo $this->Form->create('Usuario');

    echo $this->Form->input('nome', array('class' => 'form-control'));
    echo $this->Form->input('usuarios', array('class' => 'form-control'));
    echo $this->Form->input('senha', array('class' => 'form-control'));
	echo $this->Form->input('tipo',array('options'=>array('1' => 'Professor','2' => 'Tecnico')));
	   
    echo $this->Form->end('CADASTRAR');

 ?>
</div>
</div>
<div class="rodape">
  <p class="panel panel-primary">CEA477 - Sistemas para a WEB I</p>
</div>