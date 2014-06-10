<div class="trabajos index">
	<h2><?php echo __('Trabajos'); ?></h2>
        <div class="actions">
         <ul>
          <?php echo $this->Html->link($this->Html->image('add.png').'Registrar Trabajo', array('action' => 'add'), array('escape'=>FALSE, 'title'=>'Nuevo registro')); ?>         </ul>
        </div>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('paginas'); ?></th>
			<th><?php echo $this->Paginator->sort('anio'); ?></th>
			<th><?php echo $this->Paginator->sort('tem_est'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('problematica'); ?></th>
			<th><?php echo $this->Paginator->sort('resultados'); ?></th>
			<th><?php echo $this->Paginator->sort('conlusiones'); ?></th>
			<th><?php echo $this->Paginator->sort('recomendaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('beneficios'); ?></th>
			<th><?php echo $this->Paginator->sort('asp_no_inv'); ?></th>
			<th><?php echo $this->Paginator->sort('are_est_for'); ?></th>
			<th><?php echo $this->Paginator->sort('enlace'); ?></th>
			<th><?php echo $this->Paginator->sort('fec_reg'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($trabajos as $trabajo): ?>
	<tr>
		<td><?php echo h($trabajo['Trabajo']['id']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['paginas']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['anio']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['tem_est']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['problematica']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['resultados']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['conlusiones']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['recomendaciones']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['beneficios']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['asp_no_inv']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['are_est_for']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['enlace']); ?>&nbsp;</td>
		<td><?php echo h($trabajo['Trabajo']['fec_reg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image('view.png'), array('action' => 'view', $trabajo['Trabajo']['id']),array('escape'=>FALSE,'title'=>'Consultar')); ?>
			<?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => 'edit', $trabajo['Trabajo']['id']),array('escape'=>FALSE,'title'=>'Editar')); ?>
			<?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $trabajo['Trabajo']['id']),array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $trabajo['Trabajo']['id'])); ?>
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
