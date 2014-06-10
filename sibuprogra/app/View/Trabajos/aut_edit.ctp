<div class="trabajos form">
<?php echo $this->Form->create('Trabajo'); ?>
	<fieldset>
		<legend><?php echo __('Auto  Edit Trabajo'); ?></legend>
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

	</ul>
</div>
