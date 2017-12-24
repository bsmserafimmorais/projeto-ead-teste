<h1>edite pergunta</h1>


<h2>Editar aula video</h2>

<form method="POST">
	Pergunta:<br/>
	<input type="text" name="pergunta" value="<?php echo $aula['nome']; ?>"><br/><br/>
	
	opção1:<br/>
	<input type="text" name="opcao1" value="<?php echo $aula['opcao1']; ?>"><br/><br/>

	opção2:<br/>
	<input type="text" name="opcao2" value="<?php echo $aula['opcao2']; ?>"><br/><br/>

	opção3:<br/>
	<input type="text" name="opcao3" value="<?php echo $aula['opcao3']; ?>"><br/><br/>

	opção4:<br/>
	<input type="text" name="opcao4" value="<?php echo $aula['opcao4']; ?>"><br/><br/>

	Resposta:<br/>
	<select name="resposta">
		<option value="1" <?php echo ($aula['resposta'] =='1')?'selected = "selected"':'';?>>Opção1</option>
		<option value="2" <?php echo ($aula['resposta'] =='2')?'selected = "selected"':'';?>>Opção2</option>
		<option value="3" <?php echo ($aula['resposta'] =='3')?'selected = "selected"':'';?>>Opção3</option>
		<option value="4" <?php echo ($aula['resposta'] =='4')?'selected = "selected"':'';?>>Opção4</option>
	</select>

	<input type="submit" value="Salvar">
</form>