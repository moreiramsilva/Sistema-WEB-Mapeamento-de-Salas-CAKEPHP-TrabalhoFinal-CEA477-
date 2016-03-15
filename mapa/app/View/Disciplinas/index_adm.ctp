<?php echo $this->Html->css('bootstrap.min');?>

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

<h3> Area do Adminitrador: Editar Disciplinas</h3>

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
        <th>Opções</th>
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
        <td> 
           <?php echo $this->Html->image("edit.png", array(
         "alt" => "Editar",
        'url' => array('action' => 'editd')
      ));?>

            <?php echo $this->Html->image(
              "delete.png", array(
              "alt" => "Deletar",
              'url' => array('action' => 'delete', $disciplina['Disciplina']['id'])));
            ?>
      

         
        </td>
    </tr>

    <?php endforeach; ?>

</table>
</div>

<div class="rodape">
  <p class="panel panel-primary">CEA477 - Sistemas para a WEB I</p>
</div>