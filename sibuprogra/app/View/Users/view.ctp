<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($user['User']['activo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudiante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Estudiante']['identificacion'], array('controller' => 'estudiantes', 'action' => 'view', $user['Estudiante']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Grupo']['nombre'], array('controller' => 'grupos', 'action' => 'view', $user['Grupo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fec Reg'); ?></dt>
		<dd>
			<?php echo h($user['User']['fec_reg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
    		<li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('add.png'), array('action' => 'add'),array('escape'=>FALSE,'title'=>'Registrar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => 'edit', $user['User']['id']),array('escape'=>FALSE,'title'=>'Editar')); ?> </li>
		<li><?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $user['User']['id']), array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $user['User']['id'])); ?> </li>
	</ul>
</div>
