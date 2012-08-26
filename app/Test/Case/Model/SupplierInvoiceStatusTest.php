<?php
App::uses('SupplierInvoiceStatus', 'Model');

/**
 * SupplierInvoiceStatus Test Case
 *
 */
class SupplierInvoiceStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.supplier_invoice_status',
		'app.supplier_invoice'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SupplierInvoiceStatus = ClassRegistry::init('SupplierInvoiceStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SupplierInvoiceStatus);

		parent::tearDown();
	}

}
