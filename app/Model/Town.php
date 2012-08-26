<?php
App::uses('AppModel', 'Model');
/**
 * Town Model
 *
 */
class Town extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'town_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'town_name' => array(
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
}
