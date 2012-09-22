<?php
App::uses('AppController', 'Controller');
/**
 * CustomerInvoices Controller
 *
 * @property CustomerInvoice $CustomerInvoice
 */
class CustomerInvoicesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomerInvoice->recursive = 0;
		$this->set('customerInvoices', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CustomerInvoice->id = $id;
		if (!$this->CustomerInvoice->exists()) {
			throw new NotFoundException(__('Invalid customer invoice'));
		}
		$this->set('customerInvoice', $this->CustomerInvoice->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerInvoice->create();
			if ($this->CustomerInvoice->save($this->request->data)) {
				$this->Session->setFlash(__('The customer invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer invoice could not be saved. Please, try again.'));
			}
		}
		$customers = $this->CustomerInvoice->Customer->find('list');
		$invoiceGroups = $this->CustomerInvoice->InvoiceGroup->find('list');
		$invoiceStatuses = $this->CustomerInvoice->InvoiceStatus->find('list');
		$this->set(compact('customers', 'invoiceGroups', 'invoiceStatuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CustomerInvoice->id = $id;
		if (!$this->CustomerInvoice->exists()) {
			throw new NotFoundException(__('Invalid customer invoice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerInvoice->save($this->request->data)) {
				$this->Session->setFlash(__('The customer invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer invoice could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CustomerInvoice->read(null, $id);
		}
		$customers = $this->CustomerInvoice->Customer->find('list');
		$invoiceGroups = $this->CustomerInvoice->InvoiceGroup->find('list');
		$invoiceStatuses = $this->CustomerInvoice->InvoiceStatus->find('list');
		$this->set(compact('customers', 'invoiceGroups', 'invoiceStatuses'));
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
		$this->CustomerInvoice->id = $id;
		if (!$this->CustomerInvoice->exists()) {
			throw new NotFoundException(__('Invalid customer invoice'));
		}
		if ($this->CustomerInvoice->delete()) {
			$this->Session->setFlash(__('Customer invoice deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer invoice was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
