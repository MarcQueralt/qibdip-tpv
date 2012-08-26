<?php
App::uses('CustomerOrdersController', 'Controller');

/**
 * CustomerOrdersController Test Case
 *
 */
class CustomerOrdersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_order',
		'app.order_customer',
		'app.order_status'
	);

}
