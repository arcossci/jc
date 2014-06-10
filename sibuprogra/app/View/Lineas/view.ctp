<div class="lineas view">
<h2><?php  echo __('Linea'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($linea['Linea']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($linea['Linea']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fec Reg'); ?></dt>
		<dd>
			<?php echo h($linea['Linea']['fec_reg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faculty'); ?></dt>
		<dd>
			<?php echo $this->Html->link($linea['Faculty']['nombre'], array('controller' => 'faculties', 'action' => 'view', $linea['Faculty']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
    		<li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('add.png'), array('action' => 'add'),array('escape'=>FALSE,'title'=>'Registrar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => 'edit', $linea['Linea']['id']),array('escape'=>FALSE,'title'=>'Editar')); ?> </li>
		<li><?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $linea['Linea']['id']), array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $linea['Linea']['id'])); ?> </li>
	</ul>
</div>
