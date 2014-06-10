<div class="estudiantes index">
	<h2><?php echo __('Estudiantes'); ?></h2>
        <div class="actions">
         <ul>
          <?php echo $this->Html->link($this->Html->image('add.png').'Registrar Estudiante', array('action' => 'add'), array('escape'=>FALSE, 'title'=>'Nuevo registro')); ?>         </ul>
        </div>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('identificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('genero'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('fec_reg'); ?></th>
			<th><?php echo $this->Paginator->sort('programa_id'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($estudiantes as $estudiante): ?>
	<tr>
		<td><?php echo h($estudiante['Estudiante']['id']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['identificacion']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['genero']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['celular']); ?>&nbsp;</td>
		<td><?php echo h($estudiante['Estudiante']['fec_reg']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estudiante['Programa']['nombre'], array('controller' => 'programas', 'action' => 'view', $estudiante['Programa']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image('view.png'), array('action' => 'view', $estudiante['Estudiante']['id']),array('escape'=>FALSE,'title'=>'Consultar')); ?>
			<?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => 'edit', $estudiante['Estudiante']['id']),array('escape'=>FALSE,'title'=>'Editar')); ?>
			<?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $estudiante['Estudiante']['id']),array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $estudiante['Estudiante']['id'])); ?>
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
