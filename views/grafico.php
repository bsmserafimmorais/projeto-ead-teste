<?php
$vendas = array(10,20,30,40,20);
$custos = array(8,15,37,97,35);
?>
<link rel="stylesheet" type="text/css" href="<?php echo BASE;?>assets/css/grafico.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


<script type="text/javascript" src="<?php echo BASE;?>/assets/js/Chart.min.js"></script>


       <?php print_r($dados['clientes']);exit(); ?>

<div class="row">
<section class="col-sm-3 clientes" >
<?php foreach ($dados['clientes'] as $cliente ):?>
<h1 >Clientes</h1>
<ul>
	<li><?php echo $cliente['nome']; ?></li>

</ul>
<?php endforeach; ?>
</section>
<section class="col-sm-8 processo" >
	<h1 >Processo de implantação</h1>
	<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Breafing</th>
      <th>Pronto</th>
      <th>Impedimento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Procurar Template para o cliente</td>
      <td>x</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Config. Adm</th>
      <th>Pronto</th>
      <th>Impedimento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Procurar Template para o cliente</td>
      <td>x</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Tradução</th>
      <th>Pronto</th>
      <th>Impedimento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Procurar Template para o cliente</td>
      <td>x</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>Arte</th>
      <th>Pronto</th>
      <th>Impedimento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>Cadastro de produto</th>
      <th>Pronto</th>
      <th>Impedimento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Revisão</th>
      <th>Pronto</th>
      <th>Impedimento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Procurar Template para o cliente</td>
      <td>x</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
	<div style="width:500px">
		<canvas id="grafico"></canvas>
	</div>
</section>
</div>



	
	<script type="text/javascript">
		window.onload = function(){
			var contexto = document.getElementById("grafico").getContext("2d");
			var grafico = new Chart(contexto, {
				type:'line',
				data: {
					labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio'],
					datasets: [{
						label:'Vendas',
						backgroundColor:'#FF0000',
						borderColor:'#FF0000',
						data:[<?php echo implode(',', $vendas); ?>],
						fill:false
					}, {
						label:'Custos',
						backgroundColor:'#00FF00',
						borderColor:'#00FF00',
						data:[<?php echo implode(',', $custos); ?>],
						fill:false
					}]
				}
			});
		}

    	
	</script>