<?php
/**
 *
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
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="<?php echo $pluralVar; ?> form">
<?php echo "<?php echo \$this->Form->create('{$modelClass}'); ?>\n"; ?>
	<fieldset>
		<legend><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></legend>
<?php
		echo "\t<?php\n";
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field === $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
				echo "\t\techo \$this->Form->input('{$field}');\n";
			}
		}
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\techo \$this->Form->input('{$assocName}');\n";
			}
		}
		echo "\t?>\n";
?>
	</fieldset>
<?php
	echo "<?php echo \$this->Form->end(__('Aceptar')); ?>\n";
?>
</div>
<div class="actions">
	<ul>
            <li><?php echo "<?php echo \$this->Html->link(\$this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?>"; ?></li>

<?php if (strpos($action, 'add') === false): ?>
	    <li><?php echo "<?php echo \$this->Form->postLink(\$this->Html->image('delete.png'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')),array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>"; ?></li>
<?php endif; ?>
	</ul>
</div>
