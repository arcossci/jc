<?php
App::uses('AppModel', 'Model');
/**
 * Programa Model
 *
 * @property Faculty $Faculty
 * @property Propuesta $Propuesta
 */
class Programa extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Faculty' => array(
			'className' => 'Faculty',
			'foreignKey' => 'faculty_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Propuesta' => array(
			'className' => 'Propuesta',
			'joinTable' => 'propuestas_programas',
			'foreignKey' => 'programa_id',
			'associationForeignKey' => 'propuesta_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
