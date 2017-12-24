<div id="corpo_edit">
<h1>Editar Curso</h1>

<form method="POST" enctype="multipart/form-data">
	Nome do curso:<br/>
	<input type="text" name="nome" value="<?php echo $curso['nome']; ?>"><br/><br/>

	Descrição:<br/>
	<textarea name="descricao" value="<?php echo $curso['descricao']; ?>"></textarea><br/><br/>

	Imagem:<br/>
	<input type="file" name="imagem"><br/><br/>
	<img src="<?php echo BASE;?>../assets/images/<?php echo $curso['imagem'];?>" border="0" height="80" >
	<br/><br/>

	<input type="submit" value="Adicionar Curso">


</form>

<hr/>

<h2>Módulos</h2>
<fieldset>
	<legend>Adicionar Módulo novo</legend>
	<form method="POST">
		Nome do módulo:<br/>
		<input type="text" name="modulo"><br/><br/>

		<input type="submit" value="Adicionar módulo">

	</form>

</fieldset><br/>
<h2>Adicionar aula nova</h2>
<fieldset>
	<legend>Adicionar Módulo novo</legend>
	<form method="POST">
		Titulo da aula:<br/>
		<input type="text" name="aula"><br/><br/>
		Módulo da aula: <br/>
		<select name="moduloaula">

			<?php foreach($modulos as $modulo): ?>

				<option value="<?php echo $modulo['id'];?>"><?php echo utf8_encode($modulo['nome']); ?></option>
			<?php endforeach; ?>

		</select><br/><br/>

		Tipo da aula:<br/>
			<select name="tipo">

				<option value="video">Video</option>
				<option value="poll">Questionário</option>

			</select><br/><br/>

		<input type="submit" value="Adicionar aula">

	</form>

</fieldset><br/>

<?php foreach($modulos as $modulo): ?>
	<h4><?php echo utf8_encode($modulo['nome']); ?> - <a href="<?php echo BASE;?>home/edit_modulo/<?php echo $modulo['id']?>">Edit</a>-<a href="<?php echo BASE;?>home/del_modulo/<?php echo $modulo['id']?>">x</a></h4>

	<?php foreach ($modulo['aulas'] as $aula): ?>
		<h5><?php echo $aula['nome']; ?>-<a href="<?php echo BASE; ?>home/edit_aula/<?php echo $aula['id'];?>">Edit</a>-<a href="<?php echo BASE; ?>home/del_aula/<?php echo $aula['id'];?>">x</a></h5>

	<?php endforeach; ?>

<?php endforeach;?>
</div>