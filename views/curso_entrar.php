<div class="cursoinfo">
	<img src="<?php echo BASE;?>assets/images/<?php echo $curso->getImagem(); ?>" border="0" width="300" id="img_curso_entrar">

	<h3 id="nome_curso"><?php echo $curso->getNome();?></h3>
	<div id="descricao-curso" > <?php echo $curso->getDescricao(); ?></div>
</div>
<div class="curso_left">
	<?php foreach($modulos as $modulo): ?>
	<div class="modulo">
		<?php echo utf8_decode($modulo['nome']); ?>

		<?php foreach($modulo['aulas'] as $aula): ?>
			<a href="<?php echo BASE;?>cursos/aula/<?php echo $aula['id']; ?>"><div class="aula"><?php echo $aula['nome']; ?></div></a>
		<?php endforeach; ?>

	</div>	
	<?php endforeach; ?>

</div>
<div class="curso_right"></div>