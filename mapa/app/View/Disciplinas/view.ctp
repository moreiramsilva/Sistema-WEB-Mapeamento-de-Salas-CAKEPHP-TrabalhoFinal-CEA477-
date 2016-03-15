<?php echo $this->Html->css('bootstrap.min');?>

<div class="topo">
    <div class="conteiner"> 
      <div class="navbar">

        <div class="logo">

        </div>
        <div <nav class="nav navbar-right">
          <button type="button" class="button1"><span> <?php echo $this->Html->link("INICIO", '#'); ?> </span>
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
    <li><?php  echo $this->Html->link("Disciplinas",array('controller' => 'Disciplinas','action' => 'index')); ?></li>
  </ol>
<table class="table table-bordered">
<tr>
    <th>Sala</th>
    <th>Disciplina</th>
    <th>Professor</th>
    <th>Dia / Hora</th>
    

  </tr>
  <?php foreach ($disciplinas as $c): ?>
    <tr>
      <td><?php echo $c['Sala']['nome'];?></td>;
      <td>
        <?php echo $c['Disciplina']['nome'];?>
      </td>
       <td>
        <?php echo $c['Disciplina']['professor'];?>
      </td>
      <td>
        <?php echo $c['Disciplina']['dia1'];?>
        <?php echo $c['Disciplina']['horario1'];?>
        <?php echo "/"?>
        <?php echo $c['Disciplina']['dia2'];?>
        <?php echo $c['Disciplina']['horario2'];?>
      </td> 



    </tr>

  <?php endforeach; ?>
</table>

<div class="rodape">
  <p class="panel panel-primary">CEA477 - Sistemas para a WEB I</p>
</div>