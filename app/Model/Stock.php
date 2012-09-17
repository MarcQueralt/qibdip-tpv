<?php

App::uses('AppModel', 'Model');

/**
 * Stock Model
 *
 * @property RawMaterialType $RawMaterialType
 * @property SupplierSlip $SupplierSlip
 * @property SupplierInvoice $SupplierInvoice
 * @property CustomerInvoiceLine $CustomerInvoiceLine
 * @property CustomerOrderLine $CustomerOrderLine
 */
class Stock extends AppModel {

    public $virtualFields = array(
        'available' => 'if((select count(*) from customer_order_lines where customer_order_lines.stock_id=Stock.id)=0 AND Stock.stock_type="A",true,false)',
        'stock_description' => 'IF(Stock.stock_type="A",Stock.article_reference,(Select raw_mat_type_name from raw_material_types where raw_material_type_id=Stock.raw_material_type_id))',
        'expected_vat' => 'SELECT vat FROM options WHERE options.id=1',
        'expected_vat_re' => 'SELECT vat_re FROM options WHERE options.id=1',
    );
    public $displayField = 'stock_description';

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
        'supplier_slip_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'supplier_slip_line' => array(
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
        'CustomerInvoiceLine' => array(
            'className' => 'CustomerInvoiceLine',
            'foreignKey' => 'stock_id',
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
        'CustomerOrderLine' => array(
            'className' => 'CustomerOrderLine',
            'foreignKey' => 'stock_id',
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
