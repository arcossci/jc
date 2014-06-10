<?php
App::uses('AppModel', 'Model');
/**
 * Author Model
 *
 * @property Estudiante $Estudiante
 * @property Trabajo $Trabajo
 */
class Author extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


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
		'Trabajo' => array(
			'className' => 'Trabajo',
			'foreignKey' => 'trabajo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        //validaciones antes de la insercion
        public $validate = array(
            'estudiante_id' => array(
                array('rule' => 'isUnique','message' => 'El autor solo puede registrar un trabajo.')
            )    
        );
}
