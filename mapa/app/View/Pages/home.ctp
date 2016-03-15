<?php echo $this->Html->css('bootstrap.min');?>
<html>
<head>
	<title> Mapa de Sala</title>
</head>

<body>
	
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
		<li> <?php echo $this->Html->link("Inicio", array('controller' => 'Pages','action' => 'display')); ?></li>
	</ol>
<!-- <div class="container">
	<h1> Ultimas Atualizações</h1>

	 <?php foreach ($noticias as $e): ?>
	  <?php echo $e['Noticia']['post']; ?>
	  <?php endforeach; ?>
<br>

</div> -->


<div class="row">
	<table class="table table-condensed">
		
		<?php foreach ($noticias as $e): ?>
		<th>
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
				</th>	
			<?php endforeach; ?>
			

		</table>	
	</div>

			



	<div class="container">
		<div class="row">
			<div class= "col-md-4">
				<div class="media">
					<div class="row">
						<div class="col-md-4">
							<?php echo $this->Html->image('atualizacao.jpg', array('class' => 'imagem'));?>
						</div>
						<div class="col-md-8">
							<div class="texto"> <h1><?php echo $this->Html->link("Sobre", array('controller' => 'noticias', 'action' => 'sobre')); ?></h1>
								<p> Saiba como funciona o sistema de mapa</p>
							</div>
						</div> 
					</div>
				</div>
			</div><!-- Fim do atualização-->

			<div class= "col-md-4">
				<div class="media">
					<div class="row">
						<div class="col-md-4">
							<?php echo $this->Html->image('ajuda.jpg', array('class' => 'imagem'));?>
						</div>
						<div class="col-md-8">
							<div class="texto"> <h1><?php echo $this->Html->link("Contato", array('controller' => 'noticias', 'action' => 'contato'));?></h1>
								<p> Equipe de desenvolvimento</p>
							</div>
						</div> 
					</div>
				</div>
			</div><!-- Fim do Contato-->

			<div class= "col-md-4">
				<div class="media">
					<div class="row">
						<div class="col-md-4">
							<?php echo $this->Html->image('ufop.png', array('class' => 'imagem'));?>
						</div>
						<div class="col-md-8">
							<div class="texto"> <h1><?php echo $this->Html->link("UFOP", 'http://www.ufop.br'); ?></h1>
								<p> Universidade Federal de Ouro Preto</p>
							</div>
						</div> 
					</div>
				</div>
			</div><!-- Fim do Contato--> 	
		</div>
	</div>
</body>

<div class="rodape">
	<p class="panel panel-primary">CEA477 - Sistemas para a WEB I</p>
</div>

</html>
