<?php
App::uses('SupplierInvoiceStatusesController', 'Controller');

/**
 * SupplierInvoiceStatusesController Test Case
 *
 */
class SupplierInvoiceStatusesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.supplier_invoice_status',
		'app.supplier_invoice',
		'app.supplier_invoice_supplier'
	);

}
