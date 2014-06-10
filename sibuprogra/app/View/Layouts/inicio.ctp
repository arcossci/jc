<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Core CSS - Include with every page -->

    <!-- Page-Level Plugin CSS - Blank -->

    <!-- SB Admin CSS - Include with every page -->
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
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" style="min-height: 80px" href="#"><?php echo $this->Html->image("logo-system.png", array('width'=>'100px'));?></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div><!-- /.nav-collapse -->
  </div><!-- /.container -->
</div><!-- /.navbar -->

<div class="container">

 <div class="row">
     <div class="col-md-9">
         <div class="jumbotron">
          <h1>Hello, world!</h1>
          <p>...</p>
          <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
        </div>

     </div>
     <div class="col-md-3">
         <h3>Buscador</h3><br>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
          <input type="text" class="form-control" placeholder="Autor, titulo">
        </div>
         <div class="btn-group" style="margin-top: 5px"data-toggle="buttons">
          <label class="btn btn-primary">
            <input type="radio" name="options" id="option1"> Autor
          </label>
          <label class="btn btn-primary">
            <input type="radio" name="options" id="option2"> Titulo
          </label>
          <label class="btn btn-primary">
            <input type="radio" name="options" id="option3"> Tema
          </label>
         </div>
     </div>

  </div><!--/row-->
  <div class="row">
      <div class="col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/300x200" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. 
                Donec id elit non mi porta gravida at eget metus.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/300x200" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. 
                Donec id elit non mi porta gravida at eget metus.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="thumbnail">
          <img data-src="holder.js/300x200" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. 
                Donec id elit non mi porta gravida at eget metus.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> </p>
          </div>
        </div>
      </div>
      
    </div>

<?php /*
    echo $this->Session->flash(); 
    echo $this->fetch('content'); */
 ?>

 </div>

<div id="footer">
  <div class="container">
    <p class="text-muted">Place sticky footer content here.</p>
  </div>
</div>
</body>

</html>