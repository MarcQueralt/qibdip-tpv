<?php
App::uses('CustomerInvoice', 'Model');

/**
 * CustomerInvoice Test Case
 *
 */
class CustomerInvoiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_invoice',
		'app.customer_invoice_customer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CustomerInvoice = ClassRegistry::init('CustomerInvoice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomerInvoice);

		parent::tearDown();
	}

}
