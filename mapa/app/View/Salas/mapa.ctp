<?php echo $this->html->css('bootstrap.min');
  echo $this->html->script('bootstrap.min');
  echo $this->html->script('http://code.jquery.com/jquery-latest.js'); 
  echo $this->Html->script('bootstrap');
  echo $this->Js->writeBuffer();
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
    <li> <?php  echo $this->Html->link("Mapas",array('controller' => 'Salas','action' => 'mapa')); ?></li>
  </ol>
<div class="container">
    <div id="myCarousel" class="carousel slide">
      <!-- Itens de carousel -->
      <div class="carousel-inner">
        <div class="active item"> <?php echo $this->Html->image('BlocoG.jpg',array('class' => 'imagem2'));?></div>
        <div class="item"> <?php echo $this->Html->image('BlocoA.jpg',array('class' => 'imagem2'));?></div>
        <div class="item"> <?php echo $this->Html->image('BlocoB.jpg',array('class' => 'imagem2'));?></div>
        <div class="item"> <?php echo $this->Html->image('BlocoC.jpg',array('class' => 'imagem2'));?></div>
        <div class="item"> <?php echo $this->Html->image('BlocoD.jpg',array('class' => 'imagem2'));?></div>
        <div class="item"> <?php echo $this->Html->image('BlocoE.jpg',array('class' => 'imagem2'));?></div>
        <div class="item"> <?php echo $this->Html->image('BlocoH.jpg',array('class' => 'imagem2'));?></div>
      </div>
      <!-- Navegador do carousel -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>

<div class="rodape">
  <p class="panel panel-primary">CEA477 - Sistemas para a WEB I</p>
</div>