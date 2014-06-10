<div class="lineas form">
<?php echo $this->Form->create('Linea'); ?>
	<fieldset>
		<legend><?php echo __('Add Linea'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('fec_reg');
		echo $this->Form->input('faculty_id');
		echo $this->Form->input('Trabajo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<ul>
            <li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?></li>

	</ul>
</div>
