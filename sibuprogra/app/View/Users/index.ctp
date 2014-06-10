<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
        <div class="actions">
         <ul>
          <?php echo $this->Html->link($this->Html->image('add.png').'Registrar User', array('action' => 'add'), array('escape'=>FALSE, 'title'=>'Nuevo registro')); ?>         </ul>
        </div>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('activo'); ?></th>
			<th><?php echo $this->Paginator->sort('estudiante_id'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fec_reg'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['activo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Estudiante']['identificacion'], array('controller' => 'estudiantes', 'action' => 'view', $user['Estudiante']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Grupo']['nombre'], array('controller' => 'grupos', 'action' => 'view', $user['Grupo']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['fec_reg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image('view.png'), array('action' => 'view', $user['User']['id']),array('escape'=>FALSE,'title'=>'Consultar')); ?>
			<?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => 'edit', $user['User']['id']),array('escape'=>FALSE,'title'=>'Editar')); ?>
			<?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $user['User']['id']),array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
