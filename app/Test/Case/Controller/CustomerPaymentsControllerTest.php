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
		'app.payment_order'
	);

}
