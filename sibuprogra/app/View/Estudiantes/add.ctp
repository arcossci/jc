<div class="estudiantes form">
<?php echo $this->Form->create('Estudiante'); ?>
	<fieldset>
		<legend><?php echo __('Add Estudiante'); ?></legend>
	<?php
		echo $this->Form->input('identificacion');
		echo $this->Form->input('codigo');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('genero');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
                echo $this->Form->input('fec_nac');
		echo $this->Form->input('fec_reg');
		echo $this->Form->input('programa_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<ul>
            <li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?></li>

	</ul>
</div>
