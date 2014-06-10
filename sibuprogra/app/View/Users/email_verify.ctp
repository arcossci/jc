Se ha enviado un email de verificacion a la direccion dddd@dddd.com, por favor confirme su cuenta.<br>
estudiante : <?php echo $this->Session->read('email.est_id'); ?>
<br>
<?php echo $this->Html->link(' <- Ir a inicio de sesión', 'login');
