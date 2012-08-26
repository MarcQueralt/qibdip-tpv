<?php
App::uses('StocksController', 'Controller');

/**
 * StocksController Test Case
 *
 */
class StocksControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.stock',
		'app.raw_material_type',
		'app.stock_supplier_slip',
		'app.stock_supplier_invoice'
	);

}
