<?php echo $this->html->css('bootstrap.min');
  echo $this->html->script('bootstrap.min');      
?>

<div class="topo">
    <div class="conteiner"> 
      <div class="navbar">

        <div class="logo">

        </div>
        <div <nav class="nav navbar-right">
          <button type="button" class="button1"><span> <?php echo $this->Html->link("INICIO", array('controller' => 'Pages','action' => 'display')); ?> </span>
          </button>

          <button type="button" class="button1"><span> <?php  echo $this->Html->link("DISCIPLINAS",array('controller' => 'Disciplinas','action' => 'index')); ?> </span>
          </button>

          <button type="button" class="button1"><span> <?php  echo $this->Html->link("SALAS",array('controller' => 'Salas','action' => 'index')); ?> </span></button>

          <button type="button" class="button1"><span>  <?php  echo $this->Html->link("MAPAS",array('controller' => 'Salas','action' => 'mapa')); ?></span> 
          </button>

          <button type="button" class="button1"><span>  <?php  echo $this->Html->link("NOTICIAS",array('controller' => 'Noticias','action' => 'index')); ?> </span> </button>

          <?php echo $this->Html->link("Login", array('controller' => 'Usuarios', 'action' => 'index_login'), array( 'class' => 'btn btn-primary btn-lg'));?>

        </div><!--Fim da nav navbar-right-->
      </div>  
    </div>
  </div><!-- Fim da Classe topo -->


  <ol class="breadcrumb">
    <li> <?php echo $this->Html->link("Inicio",array('controller' => 'Pages','action' => 'display')); ?></li>
    <li><?php  echo $this->Html->link("Salas",array('controller' => 'Salas','action' => 'index')); ?> </li>
  </ol>

<table class="table table-bordered">

<tr>
    <th>Bloco A</th>
    <th>Bloco B</th>
    <th>Bloco C</th>
    <th>Bloco D</th>
    <th>Bloco E</th>
    <th>Bloco H</th>
 </tr>

	  <?php foreach ($salas as $e): ?>
	  	<tr>
			<td>
	        	<?php 

	       		 if($e['Sala']['bloco'] == 'A'){

	       			echo $this->Html->link($e['Sala']['nome'], array('controller' => 'Disciplinas',
	        		'action' => 'view', $e['Sala']['id']));
	         
	        	}
	        	?>
		    </td>
		    <td>
	        	<?php 

	       		 if($e['Sala']['bloco'] == 'B'){

	       			echo $this->Html->link($e['Sala']['nome'], array('controller' => 'Disciplinas',
	        		'action' => 'view', $e['Sala']['id']));
	         
	        	}
	        	?>
		    </td>
		    <td>
	        	<?php 

	       		 if($e['Sala']['bloco'] == 'C'){

	       			echo $this->Html->link($e['Sala']['nome'], array('controller' => 'Disciplinas',
	        		'action' => 'view', $e['Sala']['id']));
	         
	        	}
	        	?>
		    </td>
		    <td>
	        	<?php 

	       		 if($e['Sala']['bloco'] == 'D'){

	       			echo $this->Html->link($e['Sala']['nome'], array('controller' => 'Disciplinas',
	        		'action' => 'view', $e['Sala']['id']));
	         
	        	}
	        	?>
		    </td>
		    <td>
	        	<?php 

	       		 if($e['Sala']['bloco'] == 'E'){

	       			echo $this->Html->link($e['Sala']['nome'], array('controller' => 'Disciplinas',
	        		'action' => 'view', $e['Sala']['id']));
	         
	        	}
	        	?>
		    </td>
		    <td>
	        	<?php 

	       		 if($e['Sala']['bloco'] == 'H'){

	       			echo $this->Html->link($e['Sala']['nome'], array('controller' => 'Disciplinas',
	        		'action' => 'view', $e['Sala']['id']));
	         
	        	}
	        	?>
		    </td>
		</tr>
	    	
	  <?php endforeach; ?>

</table>
</div>

<div class="rodape">
	<p class="panel panel-primary">CEA477 - Sistemas para a WEB I</p>
</div>