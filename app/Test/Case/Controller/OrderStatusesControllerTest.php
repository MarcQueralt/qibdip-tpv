<?php
App::uses('OrderStatusesController', 'Controller');

/**
 * OrderStatusesController Test Case
 *
 */
class OrderStatusesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.order_status',
		'app.customer_order',
		'app.order_customer'
	);

}
