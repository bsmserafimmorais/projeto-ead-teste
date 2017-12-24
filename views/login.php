
<!DOCTYPE html>
<html>
<head>
	<title> LOGIN - EAD</title>
	<style type="text/css">
	body{
		margin:0;
		padding: 0;

	}
		form{
			width: 320px;
			height: 320px;
			background-color: #1e78be;
			margin: auto;
			margin-top: 395px;
			padding:20px;
			border-radius: 10px;
			opacity: 0.6;
		}
		input{
			width: 300px;
			padding: 15px;
			font-size: 14px;
			border:1px solid #CCC;
			border-radius: 25px;
		}
		.login{
			color: #FFF;
			text-align: center;
		}
		.enviar-login{
			text-transform: uppercase;
			background-color: #fac832;
			color: #FFF;
			margin-top: 30px;
			margin-left: 15px;
			cursor: pointer;

		}

	</style>
</head>
<body>




<form method="POST" class="form-login">
	<h2 class="login">LOGIN</h2>
	<input type="email" name="email" placeholder="E-mail" class="email-login"><br/><br/>


	<input type="password" name="senha" placeholder="Senha" class="senha-login"><br/><br/>


	<input type="submit" value="enviar" class="enviar-login"><br/><br/>
</form>


</body>
</html>