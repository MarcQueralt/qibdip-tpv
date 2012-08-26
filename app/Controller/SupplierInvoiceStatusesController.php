<?php
App::uses('AppController', 'Controller');
/**
 * SupplierInvoiceStatuses Controller
 *
 * @property SupplierInvoiceStatus $SupplierInvoiceStatus
 */
class SupplierInvoiceStatusesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SupplierInvoiceStatus->recursive = 0;
		$this->set('supplierInvoiceStatuses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SupplierInvoiceStatus->id = $id;
		if (!$this->SupplierInvoiceStatus->exists()) {
			throw new NotFoundException(__('Invalid supplier invoice status'));
		}
		$this->set('supplierInvoiceStatus', $this->SupplierInvoiceStatus->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SupplierInvoiceStatus->create();
			if ($this->SupplierInvoiceStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The supplier invoice status has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The supplier invoice status could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SupplierInvoiceStatus->id = $id;
		if (!$this->SupplierInvoiceStatus->exists()) {
			throw new NotFoundException(__('Invalid supplier invoice status'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SupplierInvoiceStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The supplier invoice status has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The supplier invoice status could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SupplierInvoiceStatus->read(null, $id);
		}
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
		$this->SupplierInvoiceStatus->id = $id;
		if (!$this->SupplierInvoiceStatus->exists()) {
			throw new NotFoundException(__('Invalid supplier invoice status'));
		}
		if ($this->SupplierInvoiceStatus->delete()) {
			$this->Session->setFlash(__('Supplier invoice status deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Supplier invoice status was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
