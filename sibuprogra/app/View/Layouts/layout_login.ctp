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

<body style="background-color: #f2f2f0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <?php echo $this->Html->link('Registre su trabajo de grado Aquí', 
                        array('controller'=>'estudiantes','action'=>"aut_add")); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php 
                    echo $this->Session->flash(); 
                    echo $this->fetch('content');
                 ?>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

</body>

</html>