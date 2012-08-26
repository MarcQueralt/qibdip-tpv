<?php
App::uses('SupplierInvoicesController', 'Controller');

/**
 * SupplierInvoicesController Test Case
 *
 */
class SupplierInvoicesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.supplier_invoice',
		'app.supplier_invoice_supplier',
		'app.supplier_invoice_status'
	);

}
