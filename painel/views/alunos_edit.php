<h1>Editar aluno</h1>

<form method="POST" enctype="multipart/form-data">
	Nome do aluno:<br/>
	<input type="text" name="nome" value="<?php echo $alunos['nome']; ?>"><br/><br/>

	E-mail:<br/>
	<input type="email" name="email" value="<?php echo $alunos['email']; ?>"><br/><br/>

	Senha:<br/>
	<input type="password" name="senha" value="<?php echo $alunos['senha']; ?>"><br/><br/>

	

	Cursos inscritos:<br/>
	<select name="cursos[]" multiple class="cursos_edit">
		<?php foreach($cursos as $curso): ?>
			<option value="<?php echo $curso['id'];?>"  <?php if(in_array($curso['id'], $inscritos)){ echo 'selected="selected"';} ?> ><?php echo $curso['nome'];?></option>
		<?php endforeach;?>
	</select><br/><br/>

	<input type="submit" value="Editar">


</form>
