<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
                echo $this->Html->css('bootstrap.min');
                //echo $this->Html->css('sb-admin');
                echo $this->Html->css('/font-awesome/css/font-awesome');
                
                echo $this->Html->script("jquery-1.10.2");
                echo $this->Html->script('bootstrap.min');
                echo $this->Html->script('plugins/metisMenu/jquery.metisMenu');
                //echo $this->Html->script('sb-admin');
                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');                
                
	?>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8" style="border: 1px solid #aaa;">       
                <div class="col-md-3">
                    <?php echo $this->Html->image("logo-system.png",array("width"=>"80%")); ?>
                </div>
                <div class="col-md-9">Sistema de busqueda de propuestas de grado</div>
            </div>
            <div class="col-md-4" style="border: 1px solid #aaa;">
                Menu Usuario
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="border: 1px solid #aaa;">menu superior</div>
        </div>
        <div class="row">
            <div class="col-md-12" style="border: 1px solid #aaa;">
                Buscador
                <input type="text" size="60">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="border: 1px solid #aaa;">
                Parametros de busqueda
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #aaa;">Fecha publicacion</div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #aaa;">Idioma</div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #aaa;">Palabras clave</div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #aaa;">Facultad</div>
                </div>
            </div>
            <div class="col-md-9" style="border: 1px solid #aaa;">
                Resultados de busqueda
                
            </div>
        </div>
    </div>



<?php /*
    echo $this->Session->flash(); 
    echo $this->fetch('content'); */
 ?>

</body>

</html>