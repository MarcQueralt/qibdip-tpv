<?php
App::uses('CustomerOrderLinesController', 'Controller');

/**
 * CustomerOrderLinesController Test Case
 *
 */
class CustomerOrderLinesControllerTest extends ControllerTestCase {

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

}
