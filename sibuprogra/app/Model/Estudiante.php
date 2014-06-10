<?php
App::uses('AppModel', 'Model');
/**
 * Estudiante Model
 *
 * @property Programa $Programa
 * @property Author $Author
 * @property Bookmark $Bookmark
 * @property Comentario $Comentario
 * @property User $User
 */
class Estudiante extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'identificacion';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Programa' => array(
			'className' => 'Programa',
			'foreignKey' => 'programa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Author' => array(
			'className' => 'Author',
			'foreignKey' => 'estudiante_id',
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
		'Bookmark' => array(
			'className' => 'Bookmark',
			'foreignKey' => 'estudiante_id',
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
		'Comentario' => array(
			'className' => 'Comentario',
			'foreignKey' => 'estudiante_id',
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'estudiante_id',
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
        
        //validaciones antes de la insercion
        public $validate = array(
            'identificacion' => array(
                array('rule' => 'numeric','message' => 'solo numeros'),
                array('rule' => 'isUnique','message' => 'Esta persona actualmente ya esta registrada.')
            )    
        );

}
