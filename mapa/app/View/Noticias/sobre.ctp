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
    <li><?php  echo $this->Html->link("Sobre",array('controller' => 'Noticias','action' => 'sobre')); ?></li>
  </ol> 

<div class="jumbotron">
<h4>Através deste projeto, esperamos poder ajudar calouros, veteranos e professores no início
e durante o período letivo, a encontrar suas respectivas salas de aula com mais facilidade
através de um sistema WEB. Temos o objetivo de mapear todo o campus, colocando
em cada sala a aula e o horário exato em que ela acontece, dentre outras características
adicionais. Nossa meta é que tenha um link no site do departamento que encaminhe para
a página ao nosso projeto, onde eles poderão encontrar de forma rápida, clara e objetiva
o que procuram, ou seja, sua sala de aula.</h4>
</div>

<div class="rodape">
  <p class="panel panel-primary">CEA477 - Sistemas para a WEB I</p>
</div>