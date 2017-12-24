<div class="cursoinfo">
	<img src="<?php echo BASE;?>assets/images/<?php echo $curso->getImagem(); ?>" border="0" width="300" id="img_curso_entrar">

	<h3><?php echo $curso->getNome();?></h3>
	<div id="descricao-curso"><?php echo $curso->getDescricao(); ?></div>
</div>
<div class="curso_left">
	<?php foreach($modulos as $modulo): ?>
	<div class="modulo">
		<?php echo utf8_encode($modulo['nome']); ?>

		<?php foreach($modulo['aulas'] as $aula): ?>
			<a href="<?php echo BASE;?>cursos/aula/<?php echo $aula['id']; ?>"><div class="aula"><?php echo $aula['nome']; ?></div></a>
		<?php endforeach; ?>

	</div>	
	<?php endforeach; ?>

</div>
<div class="curso_right">
	<h1>Video - <?php echo $aula_info['nome']?></h1>
	<iframe id="video" style="width:100%;"  frameborder="0" src="//player.vimeo.com/video/<?php echo $aula_info['url']; ?>"></iframe><br/><br/>
	<?php if($aula_info['assistido'] == '1'): ?>
		Está aula já foi assistida
	<?php else: ?>
		<button onclick="marcarAssistido(this)" data-id="<?php echo $aula_info['id'];?>" class="assistido"> Assistido</button>
	<?php endif; ?>
	<br/>
	<?php echo $aula_info['descricao'];?>

	<hr/>
	<h3>COMENTARIOS</h3>
	<h3>DUVIDAS? ENVIE SUA PERGUNTA!</h3>
	<form method="POST" class="form_duvida">
		<textarea name="duvida"></textarea><br><br>
		<input type="submit" value="Enviar">
	</form>
</div>