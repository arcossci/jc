<?php
App::uses('AppModel', 'Model');
/**
 * Faculty Model
 *
 * @property Estudiante $Estudiante
 * @property Linea $Linea
 * @property Programa $Programa
 */
class Faculty extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Estudiante' => array(
			'className' => 'Estudiante',
			'foreignKey' => 'faculty_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Linea' => array(
			'className' => 'Linea',
			'foreignKey' => 'faculty_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Programa' => array(
			'className' => 'Programa',
			'foreignKey' => 'faculty_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
