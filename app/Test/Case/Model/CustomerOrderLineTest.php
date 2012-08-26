<?php
App::uses('CustomerOrderLine', 'Model');

/**
 * CustomerOrderLine Test Case
 *
 */
class CustomerOrderLineTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_order_line',
		'app.order_line_order',
		'app.order_line_status',
		'app.order_line_article',
		'app.order_line_invoice'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CustomerOrderLine = ClassRegistry::init('CustomerOrderLine');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomerOrderLine);

		parent::tearDown();
	}

}
