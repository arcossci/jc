<div class="trabajos view">
<h2><?php  echo __('Trabajo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paginas'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['paginas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anio'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['anio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tem Est'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['tem_est']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Problematica'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['problematica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultados'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['resultados']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conlusiones'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['conlusiones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recomendaciones'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['recomendaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Beneficios'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['beneficios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asp No Inv'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['asp_no_inv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Are Est For'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['are_est_for']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enlace'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['enlace']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aceptado'); ?></dt>
		<dd>
			<?php echo h($trabajo['Trabajo']['aceptado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
    		<li><?php echo $this->Html->link($this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('add.png'), array('action' => 'add'),array('escape'=>FALSE,'title'=>'Registrar')); ?> </li>
		<li><?php echo $this->Html->link($this->Html->image('edit.png'), array('action' => 'edit', $trabajo['Trabajo']['id']),array('escape'=>FALSE,'title'=>'Editar')); ?> </li>
		<li><?php echo $this->Form->postLink($this->Html->image('delete.png'), array('action' => 'delete', $trabajo['Trabajo']['id']), array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', $trabajo['Trabajo']['id'])); ?> </li>
	</ul>
</div>
