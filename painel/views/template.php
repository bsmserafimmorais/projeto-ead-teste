<html>
    <head>
        <meta charset="UTF-8">
        <title>EAD</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE;?>assets/css/template.css" />
        <script type="text/javascript" src="<?php echo BASE;?>assets/js/jquery.min.js"></script>

        <script type="text/javascript" src="<?php echo BASE;?>assets/js/js.js"></script>
    </head>
    <body>
    	<div class="topo">
            <a href="<?php echo BASE;?>">
                <div>Cursos</div>
            </a>
            <a href="<?php echo BASE;?>alunos">
                <div>Alunos</div>
            </a>
    		<a href="<?php echo BASE;?>login/logout">
    			<div style="float: right;">Sair</div>
    		</a>
    		
    	</div>
        <?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    </body>
</html>
