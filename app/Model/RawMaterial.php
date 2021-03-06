<?php

App::uses('AppModel', 'Model');

/**
 * RawMaterial Model
 *
 * @property RawMaterialType $RawMaterialType
 * @property SupplierSlip $SupplierSlip
 * @property SupplierInvoice $SupplierInvoice
 * @property Consumption $Consumption
 */
class RawMaterial extends AppModel {

    public $virtualFields = array(
        'expected_vat' => 'SELECT vat FROM options WHERE options.id=1',
        'expected_vat_re' => 'SELECT vat_re FROM options WHERE options.id=1',
        'raw_mat_unit_price' => 'RawMaterial.stock_buy_price/RawMaterial.raw_mat_units',
    );

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'stock_type' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'stock_buy_price' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'stock_vat' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'raw_material_type_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'raw_mat_units' => array(
            'numeric' => array(
                'rule' => array('numeric'),
//            //'message' => 'Your custom message here',
//            //'allowEmpty' => false,
//            //'required' => false,
//            //'last' => false, // Stop validation after this rule
//            //'on' => 'create', // Limit validation to 'create' or 'update' operations
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
        'RawMaterialType' => array(
            'className' => 'RawMaterialType',
            'foreignKey' => 'raw_material_type_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'SupplierSlip' => array(
            'className' => 'SupplierSlip',
            'foreignKey' => 'supplier_slip_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'SupplierInvoice' => array(
            'className' => 'SupplierInvoice',
            'foreignKey' => 'supplier_invoice_id',
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
        'Consumption' => array(
            'className' => 'Consumption',
            'foreignKey' => 'raw_material_id',
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
