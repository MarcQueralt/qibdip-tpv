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
		'app.customer',
		'app.town',
		'app.supplier',
		'app.supplier_invoice',
		'app.supplier_invoice_status',
		'app.article',
		'app.supplier_slip',
		'app.raw_material',
		'app.raw_material_type',
		'app.stock',
		'app.customer_invoice_line',
		'app.customer_order',
		'app.order_status',
		'app.customer_order_line',
		'app.customer_payment',
		'app.consumption',
		'app.serie'
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
