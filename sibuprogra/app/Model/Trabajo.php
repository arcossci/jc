<?php
App::uses('AppModel', 'Model');
/**
 * Trabajo Model
 *
 * @property Author $Author
 * @property Bookmark $Bookmark
 * @property Comentario $Comentario
 * @property Propuesta $Propuesta
 * @property Linea $Linea
 */
class Trabajo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'titulo';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Author' => array(
			'className' => 'Author',
			'foreignKey' => 'trabajo_id',
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
			'foreignKey' => 'trabajo_id',
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
			'foreignKey' => 'trabajo_id',
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
		'Propuesta' => array(
			'className' => 'Propuesta',
			'foreignKey' => 'trabajo_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Linea' => array(
			'className' => 'Linea',
			'joinTable' => 'trabajos_lineas',
			'foreignKey' => 'trabajo_id',
			'associationForeignKey' => 'linea_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
        
        //validaciones antes de la insercion
        public $validate = array(
            'titulo' => array(
                array('rule' => 'isUnique','message' => 'Este trabajo ya se encuentra registrado.')
            )    
        );

}
