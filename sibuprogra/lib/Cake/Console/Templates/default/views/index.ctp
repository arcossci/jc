<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="<?php echo $pluralVar; ?> index">
	<h2><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></h2>
        <div class="actions">
         <ul>
          <?php echo "<?php echo \$this->Html->link(\$this->Html->image('add.png').'Registrar " . $singularHumanName . "', array('action' => 'add'), array('escape'=>FALSE, 'title'=>'Nuevo registro')); ?>"; ?>
         </ul>
        </div>
	<table cellpadding="0" cellspacing="0">
	<tr>
	<?php foreach ($fields as $field): ?>
		<th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
	<?php endforeach; ?>
		<th class="actions"><?php echo "<?php echo __('Menu'); ?>"; ?></th>
	</tr>
	<?php
	echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t<tr>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
			}
		}

		echo "\t\t<td class=\"actions\">\n";
		echo "\t\t\t<?php echo \$this->Html->link(\$this->Html->image('view.png'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('escape'=>FALSE,'title'=>'Consultar')); ?>\n";
		echo "\t\t\t<?php echo \$this->Html->link(\$this->Html->image('edit.png'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('escape'=>FALSE,'title'=>'Editar')); ?>\n";
		echo "\t\t\t<?php echo \$this->Form->postLink(\$this->Html->image('delete.png'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
		echo "\t\t</td>\n";
	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
	</table>

	<div class="paging">
	<?php
		echo "<?php\n";
		echo "\t\techo \$this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));\n";
		echo "\t\techo \$this->Paginator->numbers(array('separator' => ''));\n";
		echo "\t\techo \$this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));\n";
		echo "\t?>\n";
                
	?>
	</div>
</div>
