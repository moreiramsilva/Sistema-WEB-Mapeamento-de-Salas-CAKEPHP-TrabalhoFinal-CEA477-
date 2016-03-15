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

	<h2>Acesso ao Sistema</h2>
	<div class="Clientes form">
	<?php

		echo $this->Form->create('Usuario',array('controller' => 'Usuarios', 'action'=>'login'));

	    echo $this->Form->input('usuarios', array('class' => 'form-control'));

	    echo $this->Form->input('senha', array('class' => 'form-control'));
	   
	    echo $this->Form->end('Acessar');
	    ?>

		<ul class="nav nav-pills">

	 	 <li role="presentation" class="active">

		<?php  echo $this->Html->link("Criar Conta", array('controller' => 'Usuarios', 'action' => 'adda')); ?>

		</a></li>
		<li role="presentation" class="active">

		<?php  echo $this->Html->link("Principal", '/pages/home'); ?>

		</a></li>
		</ul>

	</div>
