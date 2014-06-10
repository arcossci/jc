<div class="propuestas form">
<?php echo $this->Form->create('Propuesta'); ?>
	<fieldset>
		<legend><?php echo __('Auto Add Propuesta'); ?></legend>
	<?php
		echo $this->Form->input('trabajo_id');
		echo $this->Form->input('propuesta');
		echo $this->Form->input('des_pro');
		echo $this->Form->input('porque');
		echo $this->Form->input('beneficios');
		echo $this->Form->input('pronostico');
		echo $this->Form->input('donde');
		echo $this->Form->input('cuando');
		echo $this->Form->input('Programa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<ul>
            <li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'aut_index'),array('escape'=>FALSE,'title'=>'Listar')); ?></li>

	</ul>
</div>
