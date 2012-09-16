<?php

App::uses('AppModel', 'Model');

/**
 * Series Model
 *
 */
class Series extends AppModel {

    public $virtualFields = array(
        'next_number' => 'SELECT COALESCE(MAX(customer_invoice_number),0)+1 FROM customer_invoices WHERE customer_invoices.serie_id=Series.id'
    );

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'serie_description';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'serie_code' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'serie_description' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'active' => array(
            'boolean' => array(
                'rule' => array('boolean'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

}
