<?php
App::uses('AppModel', 'Model');
/**
 * Supplier Model
 *
 * @property Town $Town
 */
class Supplier extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'supplier_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'supplier_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'Town' => array(
			'className' => 'Town',
			'foreignKey' => 'town_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
