<div class="propuestas index">
	<h2><?php echo __('Propuestas'); ?></h2>
        <div class="actions">
         <ul>
          <?php echo $this->Html->link($this->Html->image('add.png').'Registrar Propuesta', array('action' => 'aut_add'), array('escape'=>FALSE, 'title'=>'Nuevo registro')); ?>         </ul>
        </div>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('trabajo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('propuesta'); ?></th>
			<th><?php echo $this->Paginator->sort('des_pro'); ?></th>
			<th><?php echo $this->Paginator->sort('porque'); ?></th>
			<th><?php echo $this->Paginator->sort('beneficios'); ?></th>
			<th><?php echo $this->Paginator->sort('pronostico'); ?></th>
			<th><?php echo $this->Paginator->sort('donde'); ?></th>
			<th><?php echo $this->Paginator->sort('cuando'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($propuestas as $propuesta): ?>
	<tr>
		<td><?php echo h($propuesta['Propuesta']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propuesta['Trabajo']['titulo'], array('controller' => 'trabajos', 'action' => 'view', $propuesta['Trabajo']['id'])); ?>
		</td>
		<td><?php echo h($propuesta['Propuesta']['propuesta']); ?>&nbsp;</td>
		<td><?php echo h($propuesta['Propuesta']['des_pro']); ?>&nbsp;</td>
		<td><?php echo h($propuesta['Propuesta']['porque']); ?>&nbsp;</td>
		<td><?php echo h($propuesta['Propuesta']['beneficios']); ?>&nbsp;</td>
		<td><?php echo h($propuesta['Propuesta']['pronostico']); ?>&nbsp;</td>
		<td><?php echo h($propuesta['Propuesta']['donde']); ?>&nbsp;</td>
		<td><?php echo h($propuesta['Propuesta']['cuando']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image('view.png'), array('action' => "aut_view?hash={$this->Session->encrypt_decrypt('encrypt', $propuesta['Propuesta']['id'])}"),array('escape'=>FALSE,'title'=>'Consultar')); ?>
                        <?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => "aut_edit?hash={$this->Session->encrypt_decrypt('encrypt', $propuesta['Propuesta']['id'])}"),array('escape'=>FALSE,'title'=>'Editar')); ?>
			<?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => "aut_delete?hash={$this->Session->encrypt_decrypt('encrypt', $propuesta['Propuesta']['id'])}"),array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar la propuesta?')); ?>
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
