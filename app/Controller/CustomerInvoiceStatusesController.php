<?php
App::uses('AppController', 'Controller');
/**
 * CustomerInvoiceStatuses Controller
 *
 * @property CustomerInvoiceStatus $CustomerInvoiceStatus
 */
class CustomerInvoiceStatusesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomerInvoiceStatus->recursive = 0;
		$this->set('customerInvoiceStatuses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CustomerInvoiceStatus->id = $id;
		if (!$this->CustomerInvoiceStatus->exists()) {
			throw new NotFoundException(__('Invalid customer invoice status'));
		}
		$this->set('customerInvoiceStatus', $this->CustomerInvoiceStatus->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerInvoiceStatus->create();
			if ($this->CustomerInvoiceStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The customer invoice status has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer invoice status could not be saved. Please, try again.'));
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
		$this->CustomerInvoiceStatus->id = $id;
		if (!$this->CustomerInvoiceStatus->exists()) {
			throw new NotFoundException(__('Invalid customer invoice status'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerInvoiceStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The customer invoice status has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer invoice status could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CustomerInvoiceStatus->read(null, $id);
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
		$this->CustomerInvoiceStatus->id = $id;
		if (!$this->CustomerInvoiceStatus->exists()) {
			throw new NotFoundException(__('Invalid customer invoice status'));
		}
		if ($this->CustomerInvoiceStatus->delete()) {
			$this->Session->setFlash(__('Customer invoice status deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer invoice status was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
