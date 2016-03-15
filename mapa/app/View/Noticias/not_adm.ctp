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


  <ol class="breadcrumb">
    <li> <?php echo $this->Html->link("Inicio",array('controller' => 'Pages','action' => 'display')); ?></li>
    <li><?php  echo $this->Html->link("Noticias",array('controller' => 'Noticias','action' => 'index')); ?></li>
  </ol>

<table class="table table-condensed">

<tr>
    <th>Noticia</th>
    <th>Data</th>
    <th>Autor</th>
    <th>Disciplina</th>
    <th>Opções</th>
  </tr>

    <?php foreach ($noticias as $e): ?>

<tr>
  <td>
        <?php echo $e['Noticia']['post']; ?>
      </td>
      <td>
        <?php echo $e['Noticia']['data']; ?>
      </td>
      <td>
      <?php echo $e['Usuario']['nome']; ?>
      </td>
      <td>
      <?php echo $e['Disciplina']['nome']; ?>
      </td>
      <td>

        <?php echo $this->Html->image("edit.png", array(
         "alt" => "Editar",
        'url' => array('controller' => 'Noticias',
          'action' => 'edit', $e['Noticia']['id'])
           ));?>

            <?php echo $this->Html->image(
              "delete.png", array(
              "alt" => "Deletar",
              'url' => array('controller' => 'Noticias',
          'action' => 'delete', $e['Noticia']['id'])));
         ?>
      </td>


    </tr> 
    <?php endforeach; ?>

</table>

<div class="rodape">
  <p class="panel panel-primary">CEA477 - Sistemas para a WEB I</p>
</div>