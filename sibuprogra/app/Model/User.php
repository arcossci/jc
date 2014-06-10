<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Estudiante $Estudiante
 * @property Grupo $Grupo
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'email';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Estudiante' => array(
			'className' => 'Estudiante',
			'foreignKey' => 'estudiante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Grupo' => array(
			'className' => 'Grupo',
			'foreignKey' => 'grupo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
