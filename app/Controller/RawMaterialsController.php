<?php
App::uses('AppController', 'Controller');
/**
 * RawMaterials Controller
 *
 * @property RawMaterial $RawMaterial
 */
class RawMaterialsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RawMaterial->recursive = 0;
		$this->set('rawMaterials', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RawMaterial->id = $id;
		if (!$this->RawMaterial->exists()) {
			throw new NotFoundException(__('Invalid raw material'));
		}
		$this->set('rawMaterial', $this->RawMaterial->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RawMaterial->create();
			if ($this->RawMaterial->save($this->request->data)) {
				$this->Session->setFlash(__('The raw material has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The raw material could not be saved. Please, try again.'));
			}
		}
		$rawMaterialTypes = $this->RawMaterial->RawMaterialType->find('list');
		$supplierSlips = $this->RawMaterial->SupplierSlip->find('list');
		$supplierInvoices = $this->RawMaterial->SupplierInvoice->find('list');
		$this->set(compact('rawMaterialTypes', 'supplierSlips', 'supplierInvoices'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->RawMaterial->id = $id;
		if (!$this->RawMaterial->exists()) {
			throw new NotFoundException(__('Invalid raw material'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RawMaterial->save($this->request->data)) {
				$this->Session->setFlash(__('The raw material has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The raw material could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RawMaterial->read(null, $id);
		}
		$rawMaterialTypes = $this->RawMaterial->RawMaterialType->find('list');
		$supplierSlips = $this->RawMaterial->SupplierSlip->find('list');
		$supplierInvoices = $this->RawMaterial->SupplierInvoice->find('list');
		$this->set(compact('rawMaterialTypes', 'supplierSlips', 'supplierInvoices'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->RawMaterial->id = $id;
		if (!$this->RawMaterial->exists()) {
			throw new NotFoundException(__('Invalid raw material'));
		}
		if ($this->RawMaterial->delete()) {
			$this->Session->setFlash(__('Raw material deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Raw material was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
