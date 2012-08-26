<?php
App::uses('AppController', 'Controller');
/**
 * SupplierInvoices Controller
 *
 * @property SupplierInvoice $SupplierInvoice
 */
class SupplierInvoicesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SupplierInvoice->recursive = 0;
		$this->set('supplierInvoices', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SupplierInvoice->id = $id;
		if (!$this->SupplierInvoice->exists()) {
			throw new NotFoundException(__('Invalid supplier invoice'));
		}
		$this->set('supplierInvoice', $this->SupplierInvoice->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SupplierInvoice->create();
			if ($this->SupplierInvoice->save($this->request->data)) {
				$this->Session->setFlash(__('The supplier invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The supplier invoice could not be saved. Please, try again.'));
			}
		}
		$suppliers = $this->SupplierInvoice->Supplier->find('list');
		$supplierInvoiceStatuses = $this->SupplierInvoice->SupplierInvoiceStatus->find('list');
		$this->set(compact('suppliers', 'supplierInvoiceStatuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SupplierInvoice->id = $id;
		if (!$this->SupplierInvoice->exists()) {
			throw new NotFoundException(__('Invalid supplier invoice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SupplierInvoice->save($this->request->data)) {
				$this->Session->setFlash(__('The supplier invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The supplier invoice could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SupplierInvoice->read(null, $id);
		}
		$suppliers = $this->SupplierInvoice->Supplier->find('list');
		$supplierInvoiceStatuses = $this->SupplierInvoice->SupplierInvoiceStatus->find('list');
		$this->set(compact('suppliers', 'supplierInvoiceStatuses'));
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
		$this->SupplierInvoice->id = $id;
		if (!$this->SupplierInvoice->exists()) {
			throw new NotFoundException(__('Invalid supplier invoice'));
		}
		if ($this->SupplierInvoice->delete()) {
			$this->Session->setFlash(__('Supplier invoice deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Supplier invoice was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
