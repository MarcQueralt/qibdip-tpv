<?php
App::uses('CustomerInvoicesController', 'Controller');

/**
 * CustomerInvoicesController Test Case
 *
 */
class CustomerInvoicesControllerTest extends ControllerTestCase {

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

}
