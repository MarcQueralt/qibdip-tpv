<?php
App::uses('SupplierSlip', 'Model');

/**
 * SupplierSlip Test Case
 *
 */
class SupplierSlipTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.supplier_slip',
		'app.supplier_slip_supplier'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SupplierSlip = ClassRegistry::init('SupplierSlip');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SupplierSlip);

		parent::tearDown();
	}

}
