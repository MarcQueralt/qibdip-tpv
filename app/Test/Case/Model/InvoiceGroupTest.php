<?php
App::uses('InvoiceGroup', 'Model');

/**
 * InvoiceGroup Test Case
 *
 */
class InvoiceGroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.invoice_group',
		'app.customer_invoice',
		'app.customer',
		'app.customer_order',
		'app.order_status',
		'app.customer_invoice_line',
		'app.stock',
		'app.raw_material_type',
		'app.raw_material',
		'app.supplier_slip',
		'app.supplier',
		'app.supplier_invoice',
		'app.supplier_invoice_status',
		'app.article',
		'app.consumption',
		'app.customer_order_line',
		'app.service_type',
		'app.customer_payment',
		'app.serie',
		'app.customer_invoice_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InvoiceGroup = ClassRegistry::init('InvoiceGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InvoiceGroup);

		parent::tearDown();
	}

}
