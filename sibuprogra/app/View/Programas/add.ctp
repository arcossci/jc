<div class="programas form">
<?php echo $this->Form->create('Programa'); ?>
	<fieldset>
		<legend><?php echo __('Add Programa'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('fec_reg');
		echo $this->Form->input('faculty_id');
		echo $this->Form->input('Propuesta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<ul>
            <li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?></li>

	</ul>
</div>
