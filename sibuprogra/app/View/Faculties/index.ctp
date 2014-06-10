<div class="faculties index">
	<h2><?php echo __('Faculties'); ?></h2>
        <div class="actions">
         <ul>
          <?php echo $this->Html->link($this->Html->image('add.png').'Registrar Faculty', array('action' => 'add'), array('escape'=>FALSE, 'title'=>'Nuevo registro')); ?>         </ul>
        </div>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('fec_reg'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($faculties as $faculty): ?>
	<tr>
		<td><?php echo h($faculty['Faculty']['id']); ?>&nbsp;</td>
		<td><?php echo h($faculty['Faculty']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($faculty['Faculty']['fec_reg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image('view.png'), array('action' => 'view', $faculty['Faculty']['id']),array('escape'=>FALSE,'title'=>'Consultar')); ?>
			<?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => 'edit', $faculty['Faculty']['id']),array('escape'=>FALSE,'title'=>'Editar')); ?>
			<?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $faculty['Faculty']['id']),array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $faculty['Faculty']['id'])); ?>
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
