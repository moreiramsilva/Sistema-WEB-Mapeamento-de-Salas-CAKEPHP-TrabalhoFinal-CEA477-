	<?php echo $this->html->css('bootstrap.min');
	  echo $this->html->script('bootstrap.min');      
	?>


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

<h3> Area do Adminitrador: Editar Salas</h3>

   

	<table class="table table-condensed">
	<tr>
        <th>Id</th>
        <th>Sala</th>
        <th>Opções</th>
    </tr>

		  <?php foreach ($salas as $e): ?>
		  	<tr>
		  		<td><?php echo $e['Sala']['id']; ?></td>
			<td>
		        <?php echo $this->Html->link($e['Sala']['nome'],
		          array('controller' => 'Salas',
		                'action' => 'view', $e['Sala']['id']));
		         ?>
			      </td>
			    
			    <td> 
	         <?php echo $this->Html->image("edit.png", array(
   			 "alt" => "Editar",
    		'url' => array('action' => 'edit')
			     ));?>

	         	<?php echo $this->Html->image(
	            "delete.png", array(
	            "alt" => "Deletar",
	            'url' => array('action' => 'delete', $e['Sala']['id'])));
	        	?>
			

	        </td>
	        </tr>
		    	
		  <?php endforeach; ?>
	</table>

  <div class="rodape">
  <p class="panel panel-primary">CEA477 - Sistemas para a WEB I</p>
</div>