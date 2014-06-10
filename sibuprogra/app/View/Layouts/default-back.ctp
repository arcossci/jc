<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'SIBUPROGRA - Sistema de busqueda de propuestas de grado');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('base');
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
<body style="background-color: #f8f8f8;">
<div id="container">

    <div class="row">
            <div class="col-md-12"> </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div style="text-align: center">   
                <?php echo $this->Html->image("logo-system.png", array('width'=>'12%')); ?>
            </div>
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
    
<?php //echo $this->element('sql_dump'); ?>
<script>                            
    $('#flashMessage').delay(4000).fadeOut(1000);   //desaparecer notificacion t espera - t desaparicion
</script>
</body>
</html>
