<?php
App::uses('AppModel', 'Model');
/**
 * Albaran Model
 *
 * @property Proveidor $Proveidor
 */
class Albaran extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'num';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'num' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'proveidor_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Proveidor' => array(
			'className' => 'Proveidor',
			'foreignKey' => 'proveidor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
