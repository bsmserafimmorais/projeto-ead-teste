

<h1 class="seus_cursos">SEUS CURSOS</h1>
<?php foreach($cursos as $curso): ?>
<a href="<?php echo BASE; ?>cursos/entrar/<?php echo $curso['id_curso']; ?>">
<div class="cursoitem">
	<img src="<?php echo BASE;?>assets/images/<?php echo $curso['imagem']?>" border="0" width="300" height="200">
	<strong><?php echo $curso['nome']; ?></strong>

	<?php echo $curso['descricao'];?>
</div>
</a>
<?php endforeach;?>