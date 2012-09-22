<?php
App::uses('CustomerPayment', 'Model');

/**
 * CustomerPayment Test Case
 *
 */
class CustomerPaymentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_payment',
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
		'app.customer_invoice',
		'app.serie',
		'app.customer_order_line',
		'app.customer_order',
		'app.order_status',
		'app.consumption'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CustomerPayment = ClassRegistry::init('CustomerPayment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomerPayment);

		parent::tearDown();
	}

}
