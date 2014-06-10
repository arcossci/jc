<div class="authors index">
	<h2><?php echo __('Authors'); ?></h2>
        <div class="actions">
         <ul>
          <?php echo $this->Html->link($this->Html->image('add.png').'Registrar Author', array('action' => 'add'), array('escape'=>FALSE, 'title'=>'Nuevo registro')); ?>         </ul>
        </div>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fec_reg'); ?></th>
			<th><?php echo $this->Paginator->sort('estudiante_id'); ?></th>
			<th><?php echo $this->Paginator->sort('trabajo_id'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($authors as $author): ?>
	<tr>
		<td><?php echo h($author['Author']['id']); ?>&nbsp;</td>
		<td><?php echo h($author['Author']['fec_reg']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($author['Estudiante']['identificacion'], array('controller' => 'estudiantes', 'action' => 'view', $author['Estudiante']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($author['Trabajo']['titulo'], array('controller' => 'trabajos', 'action' => 'view', $author['Trabajo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image('view.png'), array('action' => 'view', $author['Author']['id']),array('escape'=>FALSE,'title'=>'Consultar')); ?>
			<?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => 'edit', $author['Author']['id']),array('escape'=>FALSE,'title'=>'Editar')); ?>
			<?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $author['Author']['id']),array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $author['Author']['id'])); ?>
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
