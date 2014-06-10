<div class="trabajos form">
<?php echo $this->Form->create('Trabajo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Trabajo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('paginas');
		echo $this->Form->input('anio');
		echo $this->Form->input('tem_est');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('problematica');
		echo $this->Form->input('resultados');
		echo $this->Form->input('conlusiones');
		echo $this->Form->input('recomendaciones');
		echo $this->Form->input('beneficios');
		echo $this->Form->input('asp_no_inv');
		echo $this->Form->input('are_est_for');
		echo $this->Form->input('enlace');
		echo $this->Form->input('fec_reg');
                echo $this->Form->input('aceptado');
		echo $this->Form->input('Linea');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<ul>
            <li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?></li>

	    <li><?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $this->Form->value('Trabajo.id')),array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $this->Form->value('Trabajo.id'))); ?></li>
	</ul>
</div>
