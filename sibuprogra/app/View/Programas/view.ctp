<div class="programas view">
<h2><?php  echo __('Programa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($programa['Programa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($programa['Programa']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fec Reg'); ?></dt>
		<dd>
			<?php echo h($programa['Programa']['fec_reg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faculty'); ?></dt>
		<dd>
			<?php echo $this->Html->link($programa['Faculty']['nombre'], array('controller' => 'faculties', 'action' => 'view', $programa['Faculty']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
    		<li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('add.png'), array('action' => 'add'),array('escape'=>FALSE,'title'=>'Registrar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => 'edit', $programa['Programa']['id']),array('escape'=>FALSE,'title'=>'Editar')); ?> </li>
		<li><?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $programa['Programa']['id']), array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $programa['Programa']['id'])); ?> </li>
	</ul>
</div>
