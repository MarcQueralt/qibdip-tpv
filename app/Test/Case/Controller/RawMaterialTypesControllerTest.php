<?php
App::uses('RawMaterialTypesController', 'Controller');

/**
 * RawMaterialTypesController Test Case
 *
 */
class RawMaterialTypesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.raw_material_type',
		'app.stock',
		'app.stock_supplier_slip',
		'app.stock_supplier_invoice'
	);

}
