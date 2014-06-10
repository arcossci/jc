<div class="authors view">
<h2><?php  echo __('Author'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($author['Author']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fec Reg'); ?></dt>
		<dd>
			<?php echo h($author['Author']['fec_reg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudiante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($author['Estudiante']['identificacion'], array('controller' => 'estudiantes', 'action' => 'view', $author['Estudiante']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trabajo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($author['Trabajo']['titulo'], array('controller' => 'trabajos', 'action' => 'view', $author['Trabajo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
    		<li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('add.png'), array('action' => 'add'),array('escape'=>FALSE,'title'=>'Registrar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => 'edit', $author['Author']['id']),array('escape'=>FALSE,'title'=>'Editar')); ?> </li>
		<li><?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $author['Author']['id']), array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $author['Author']['id'])); ?> </li>
	</ul>
</div>
