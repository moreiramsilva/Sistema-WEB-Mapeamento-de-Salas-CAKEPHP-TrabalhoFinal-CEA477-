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
    <li><?php  echo $this->Html->link("Contato",array('controller' => 'Noticias','action' => 'contato')); ?></li>
  </ol> 

<table class="table table-condensed">

<tr>
    <th>NOME</th>
    <th>MATRICULA</th>
    <th>E-mail</th>
    <th>ALUNO</th>
  </tr>

<tr>
	<td>
        Matheus da S. Moreira
      </td>
      <td>
        12.2.8427
      </td>
      <td>
        matheusms@ymail.com
      </td>
      <td>
      <?php echo $this->Html->image('matheus.jpg', array('class' => 'imagem'));?>
      </td>
  </tr>	
<tr>
  <td>
        Alexandre J. T. Maciel
      </td>
      <td>
        12.2.8150
      </td>
      <td>
        alexandre-maciel@hotmail.com.br
      </td>
      <td>
      <?php echo $this->Html->image('alexandre.jpg', array('class' => 'imagem'));?>
      </td>
  </tr> 
<tr>
  <td>
       Arthur P. M. Ferreira
      </td>
      <td>
        10.2.8105
      </td>
      <td>
        arthurufop@yahoo.com.br
      </td>
      <td>
      <?php echo $this->Html->image('arthur.jpg', array('class' => 'imagem'));?>
      </td>
  </tr> 
</table>

<div class="rodape">
  <p class="panel panel-primary">CEA477 - Sistemas para a WEB I</p>
</div>