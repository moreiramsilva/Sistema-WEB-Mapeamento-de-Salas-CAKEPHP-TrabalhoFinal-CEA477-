<?php echo $this->Html->css('bootstrap.min');?>

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
    <li><?php  echo $this->Html->link("Disciplinas",array('controller' => 'Disciplinas','action' => 'index')); ?></li>
  </ol>

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Codigo</th>
        <th>Nome</th>
        <th>Professor</th>
        <th>Dia 1</th>
        <th>Horario 1</th>
        <th>Dia 2</th>
        <th>Horario 2</th>
        <th>Curso</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $produto, imprimindo
         as informações dos produto -->

    <?php foreach ($disciplinas as $disciplina): ?>
    <tr>
        <td><?php echo $disciplina['Disciplina']['id']; ?></td>
        <td><?php echo $disciplina['Disciplina']['codigo']; ?></td>
        <td>
            <?php echo $disciplina['Disciplina']['nome']; ?></td>
        <td><?php echo $disciplina['Disciplina']['professor']; ?></td>
        <td><?php echo $disciplina['Disciplina']['dia1']; ?></td>
        <td><?php echo $disciplina['Disciplina']['horario1']; ?></td>
        <td><?php echo $disciplina['Disciplina']['dia2']; ?></td>
        <td><?php echo $disciplina['Disciplina']['horario2']; ?></td>
        <td><?php echo $disciplina['Disciplina']['curso']; ?></td>
        
    </tr>

    <?php endforeach; ?>

</table>
</div>

<div class="rodape">
  <p class="panel panel-primary">CEA477 - Sistemas para a WEB I</p>
</div>