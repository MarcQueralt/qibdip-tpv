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
		'app.supplier',
		'app.supplier_slip',
		'app.article',
		'app.consumption',
		'app.raw_material',
		'app.raw_material_type',
		'app.stock',
		'app.customer_invoice_line',
		'app.customer_invoice',
		'app.customer',
		'app.customer_order',
		'app.order_status',
		'app.customer_order_line',
		'app.customer_payment',
		'app.serie',
		'app.supplier_invoice_status'
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
