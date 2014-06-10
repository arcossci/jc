<div class="estudiantes view">
<h2><?php  echo __('Estudiante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['identificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fec Reg'); ?></dt>
		<dd>
			<?php echo h($estudiante['Estudiante']['fec_reg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Programa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estudiante['Programa']['nombre'], array('controller' => 'programas', 'action' => 'view', $estudiante['Programa']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
    		<li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('add.png'), array('action' => 'add'),array('escape'=>FALSE,'title'=>'Registrar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => 'edit', $estudiante['Estudiante']['id']),array('escape'=>FALSE,'title'=>'Editar')); ?> </li>
		<li><?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $estudiante['Estudiante']['id']), array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $estudiante['Estudiante']['id'])); ?> </li>
	</ul>
</div>
