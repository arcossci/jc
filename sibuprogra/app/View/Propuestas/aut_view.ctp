<div class="propuestas view">
<h2><?php  echo __('Propuesta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propuesta['Propuesta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trabajo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propuesta['Trabajo']['titulo'], array('controller' => 'trabajos', 'action' => 'view', $propuesta['Trabajo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propuesta'); ?></dt>
		<dd>
			<?php echo h($propuesta['Propuesta']['propuesta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Des Pro'); ?></dt>
		<dd>
			<?php echo h($propuesta['Propuesta']['des_pro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porque'); ?></dt>
		<dd>
			<?php echo h($propuesta['Propuesta']['porque']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Beneficios'); ?></dt>
		<dd>
			<?php echo h($propuesta['Propuesta']['beneficios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pronostico'); ?></dt>
		<dd>
			<?php echo h($propuesta['Propuesta']['pronostico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donde'); ?></dt>
		<dd>
			<?php echo h($propuesta['Propuesta']['donde']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuando'); ?></dt>
		<dd>
			<?php echo h($propuesta['Propuesta']['cuando']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
    		<li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'aut_index'),array('escape'=>FALSE,'title'=>'Listar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('add.png'), array('action' => 'aut_add'),array('escape'=>FALSE,'title'=>'Registrar')); ?> </li>
                <li><?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => "aut_edit?hash={$this->Session->encrypt_decrypt('encrypt',$propuesta['Propuesta']['id'])}"),array('escape'=>FALSE,'title'=>'Editar')); ?> </li>
                <li><?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => "aut_delete?hash={$this->Session->encrypt_decrypt('encrypt',$propuesta['Propuesta']['id'])}"), array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar la propuesta?')); ?> </li>
	</ul>
</div>
