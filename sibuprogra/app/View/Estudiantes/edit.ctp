<div class="estudiantes form">
<?php echo $this->Form->create('Estudiante'); ?>
	<fieldset>
		<legend><?php echo __('Edit Estudiante'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('identificacion');
		echo $this->Form->input('codigo');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('genero');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
                echo $this->Form->input('fec_reg');
		echo $this->Form->input('fec_nac');
		echo $this->Form->input('programa_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<ul>
            <li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?></li>

	    <li><?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $this->Form->value('Estudiante.id')),array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $this->Form->value('Estudiante.id'))); ?></li>
	</ul>
</div>
