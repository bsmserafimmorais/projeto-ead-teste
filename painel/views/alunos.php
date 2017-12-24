<h1>Alunos</h1>

<h1>Cursos</h1>
<a href="<?php echo BASE; ?>alunos/adicionar">Adicionar aluno</a><br/>
<table border="0" width="100%">
	<tr>
		<th>Nome</th>
		<th width="80">Qt. de cursos</th>
		<th >Ações</th>
	</tr>
	<?php foreach($alunos as $aluno): ?>
		<tr>
			<td ><?php echo $aluno['nome']; ?></td>
			<td align="center"><?php echo $aluno['qtcursos']; ?></td>
			<td width="200" ><a href="<?php echo BASE; ?>alunos/editar/<?php echo $aluno['id'];?>">Editar</a>-<a href="<?php echo BASE; ?>alunos/excluir/<?php echo $aluno['id']; ?>">Excluir</a></td>
		</tr>


	<?php endforeach; ?>
</table>