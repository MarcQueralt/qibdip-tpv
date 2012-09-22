<?php
App::uses('CustomerPaymentsController', 'Controller');

/**
 * CustomerPaymentsController Test Case
 *
 */
class CustomerPaymentsControllerTest extends ControllerTestCase {

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
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
	}

}
