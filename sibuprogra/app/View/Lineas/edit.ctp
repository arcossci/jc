<div class="lineas form">
<?php echo $this->Form->create('Linea'); ?>
	<fieldset>
		<legend><?php echo __('Edit Linea'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

	    <li><?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $this->Form->value('Linea.id')),array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $this->Form->value('Linea.id'))); ?></li>
	</ul>
</div>
