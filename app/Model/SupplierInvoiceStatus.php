<?php

App::uses('AppModel', 'Model');

/**
 * SupplierInvoiceStatus Model
 *
 * @property SupplierInvoice $SupplierInvoice
 */
class SupplierInvoiceStatus extends AppModel {

    public $displayField = 'sup_inv_status_name';

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'supplier_invoice_status';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'sup_inv_status_name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'sup_inv_is_final_status' => array(
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

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'SupplierInvoice' => array(
            'className' => 'SupplierInvoice',
            'foreignKey' => 'supplier_invoice_status_id',
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
