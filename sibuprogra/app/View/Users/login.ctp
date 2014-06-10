
<div style="text-align: center">   
    <?php echo $this->Html->image("logo-system.png", array('width'=>'40%')); ?>
</div>
<?php echo $this->Form->create("User", array("action"=>"login", "class"=>"form-signin", "role"=>"form")); ?>
<h3 class="form-signin-heading">Iniciar sesión</h3>
<?php echo $this->Form->input("email", array("class"=>"form-control","required"=>true,"autofocus"=>"","type" =>"email","placeholder"=>"Email address","label"=>false)); ?>
<?php echo $this->Form->input("password", array("class"=>"form-control","required"=>true,"type" =>"password","placeholder"=>"Password","label"=>false)); ?>


<label class="checkbox">
  <input type="checkbox" value="remember-me"> Recordarme
</label>
<label>
    Aun no posee una cuenta? <?php echo $this->Html->link("Registrese Aquí", 
        array("controller"=>"estudiantes","action"=>"autoadd?hash={$this->Session->encrypt_decrypt('encrypt', 'Estudiante')}"));?>
</label>
<?php echo $this->Form->button("Iniciar", array("class"=>"btn btn-lg btn-primary btn-block")); ?>
<?php echo $this->Form->end(); ?>
