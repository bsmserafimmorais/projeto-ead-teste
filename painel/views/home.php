<h1>Cursos</h1>
<a href="<?php echo BASE; ?>home/adicionar">Adicionar curso</a><br/>
<table border="0" width="100%">
	<tr>
		<th >Imagem</th>
		<th>Nome</th>
		<th width="80">Qt. de alunos</th>
		<th >Ações</th>
	</tr>
	<?php foreach($cursos as $curso): ?>
		<tr>
			<td width="150"><img src="<?php echo BASE ;?>../assets/images/<?php echo $curso['imagem'] ;?>" border="0" height="70"></td>
			<td ><?php echo $curso['nome']; ?></td>
			<td align="center"><?php echo $curso['qtalunos']; ?></td>
			<td width="200" ><a href="<?php echo BASE; ?>home/editar/<?php echo $curso['id'];?>">Editar</a>-<a href="<?php echo BASE; ?>home/excluir/<?php echo $curso['id']; ?>">Excluir</a></td>
		</tr>


	<?php endforeach; ?>
</table>