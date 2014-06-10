<div class="faculties view">
<h2><?php  echo __('Faculty'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($faculty['Faculty']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($faculty['Faculty']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fec Reg'); ?></dt>
		<dd>
			<?php echo h($faculty['Faculty']['fec_reg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
    		<li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('add.png'), array('action' => 'add'),array('escape'=>FALSE,'title'=>'Registrar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => 'edit', $faculty['Faculty']['id']),array('escape'=>FALSE,'title'=>'Editar')); ?> </li>
		<li><?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $faculty['Faculty']['id']), array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $faculty['Faculty']['id'])); ?> </li>
	</ul>
</div>
