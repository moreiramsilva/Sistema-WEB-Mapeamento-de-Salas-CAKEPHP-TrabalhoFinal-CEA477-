<?php echo $this->html->css('bootstrap.min');
  echo $this->html->script('bootstrap.min');      
?>

<div class="topo">
    <div class="conteiner"> 
      <div class="navbar">

        <div class="logo">

        </div>
        <div <nav class="nav navbar-right">
          <button type="button" class="button1"><span> <?php echo $this->Html->link("INICIO", array('controller' => 'Pages','action' => 'display'));?> </span>
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
    <li><?php  echo $this->Html->link("Noticias",array('controller' => 'Noticias','action' => 'index')); ?></li>
  </ol>

<table class="table table-condensed">

  <?php foreach ($noticias as $e): ?>
  <tr>
    <div class="panel panel-primary"> 
      <div class="panel-body">

        <?php echo $e['Noticia']['post']; ?>

      </div>
      <div class="panel-footer">

          Professor:  <?php echo $e['Usuario']['nome']; ?>
       
         <t>Disciplina: <?php echo $e['Disciplina']['nome']; ?>

         <t>Postado em <?php echo $e['Noticia']['data']; ?>

      </div>
    </div>
  </tr>	
	  <?php endforeach; ?>
</table>


<div class="rodape">
  <p class="panel panel-primary">CEA477 - Sistemas para a WEB I</p>
</div>