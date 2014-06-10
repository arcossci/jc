<?php
App::uses('AppModel', 'Model');
/**
 * Linea Model
 *
 * @property Faculty $Faculty
 * @property Trabajo $Trabajo
 */
class Linea extends AppModel {

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
		'Trabajo' => array(
			'className' => 'Trabajo',
			'joinTable' => 'trabajos_lineas',
			'foreignKey' => 'linea_id',
			'associationForeignKey' => 'trabajo_id',
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
