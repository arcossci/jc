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
<div class="<?php echo $pluralVar; ?> view">
<h2><?php echo "<?php  echo __('{$singularHumanName}'); ?>"; ?></h2>
	<dl>
<?php
foreach ($fields as $field) {
	$isKey = false;
	if (!empty($associations['belongsTo'])) {
		foreach ($associations['belongsTo'] as $alias => $details) {
			if ($field === $details['foreignKey']) {
				$isKey = true;
				echo "\t\t<dt><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></dt>\n";
				echo "\t\t<dd>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t</dd>\n";
				break;
			}
		}
	}
	if ($isKey !== true) {
		echo "\t\t<dt><?php echo __('" . Inflector::humanize($field) . "'); ?></dt>\n";
		echo "\t\t<dd>\n\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t&nbsp;\n\t\t</dd>\n";
	}
}
?>
	</dl>
</div>
<div class="actions">
	<ul>
    <?php
            echo "\t\t<li><?php echo \$this->Html->link(\$this->Html->image('index.png'), array('action' => 'index'),array('escape'=>FALSE,'title'=>'Listar')); ?> </li>\n";
            echo "\t\t<li><?php echo \$this->Html->link(\$this->Html->image('add.png'), array('action' => 'add'),array('escape'=>FALSE,'title'=>'Registrar')); ?> </li>\n";
            echo "\t\t<li><?php echo \$this->Html->link(\$this->Html->image('edit.png'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('escape'=>FALSE,'title'=>'Editar')); ?> </li>\n";
            echo "\t\t<li><?php echo \$this->Form->postLink(\$this->Html->image('delete.png'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape'=>FALSE,'title'=>'Eliminar'), __('Seguro desea eliminar # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
    ?>
	</ul>
</div>
