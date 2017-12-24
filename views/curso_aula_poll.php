<div class="cursoinfo">
	<img src="<?php echo BASE;?>assets/images/<?php echo $curso->getImagem(); ?>" border="0" width="80">

	<h3><?php echo $curso->getNome();?></h3>
	<?php echo $curso->getDescricao(); ?>
</div>
<div class="curso_left">
	<?php foreach($modulos as $modulo): ?>
	<div class="modulo">
		<?php echo $modulo['nome']; ?>

		<?php foreach($modulo['aulas'] as $aula): ?>
			<a href="<?php echo BASE;?>cursos/aula/<?php echo $aula['id']; ?>"><div class="aula"><?php echo $aula['nome']; ?></div></a>
		<?php endforeach; ?>

	</div>	
	<?php endforeach; ?>

</div>

<div class="curso_right">
	<h1>Questionario</h1>
	<?php
		if($_SESSION['poll'.$aula_info['id_aula']] > 2){
			echo 'VOCE ATINGIU O LIMITE DE TENTATIVAS';
		}else{
			echo 'TENTATIVAS '.$_SESSION['poll'.$aula_info['id_aula']].'de 2';
	?>


	<h3><?php echo utf8_encode($aula_info['pergunta']); ?></h3>

<form method="POST">
	<input type="radio" name="opcao" value="1" id="opcao1"/>
	<label for="opacao1"><?php echo $aula_info['opcao1'];?></label><br/>


	<input type="radio" name="opcao" value="2" id="opcao2"/>
	<label for="opacao2"><?php echo $aula_info['opcao2'];?></label><br/>


	<input type="radio" name="opcao" value="3" id="opcao3"/>
	<label for="opacao3"><?php echo $aula_info['opcao3'];?></label><br/>


	<input type="radio" name="opcao" value="4" id="opcao4"/>
	<label for="opacao4"><?php echo $aula_info['opcao4'];?></label><br/>

	<input type="submit" value="Enviar Resposta">

	</form>
	<?php if(isset($resposta)){
		if($resposta === true){
			echo "RESPOSTA CORRETA";
		}else{
			echo "RESPOSTA INCORRETA";
		}
	}?>

<?php } ?>
</div>