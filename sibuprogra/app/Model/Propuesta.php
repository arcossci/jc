<?php
App::uses('AppModel', 'Model');
/**
 * Propuesta Model
 *
 * @property Trabajo $Trabajo
 * @property Programa $Programa
 */
class Propuesta extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'propuesta';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Trabajo' => array(
			'className' => 'Trabajo',
			'foreignKey' => 'trabajo_id',
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
		'Programa' => array(
			'className' => 'Programa',
			'joinTable' => 'propuestas_programas',
			'foreignKey' => 'propuesta_id',
			'associationForeignKey' => 'programa_id',
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
