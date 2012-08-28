<?php
App::uses('AppModel', 'Model');
/**
 * Consumption Model
 *
 * @property Article $Article
 * @property RawMaterial $RawMaterial
 */
class Consumption extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'article_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Article' => array(
			'className' => 'Article',
			'foreignKey' => 'article_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RawMaterial' => array(
			'className' => 'RawMaterial',
			'foreignKey' => 'raw_material_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
