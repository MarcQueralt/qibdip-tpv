<?php
App::uses('SupplierInvoice', 'Model');

/**
 * SupplierInvoice Test Case
 *
 */
class SupplierInvoiceTest extends CakeTestCase {

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

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SupplierInvoice = ClassRegistry::init('SupplierInvoice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SupplierInvoice);

		parent::tearDown();
	}

}
