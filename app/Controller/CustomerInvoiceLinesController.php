<?php
App::uses('AppController', 'Controller');
/**
 * CustomerInvoiceLines Controller
 *
 * @property CustomerInvoiceLine $CustomerInvoiceLine
 */
class CustomerInvoiceLinesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomerInvoiceLine->recursive = 0;
		$this->set('customerInvoiceLines', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CustomerInvoiceLine->id = $id;
		if (!$this->CustomerInvoiceLine->exists()) {
			throw new NotFoundException(__('Invalid customer invoice line'));
		}
		$this->set('customerInvoiceLine', $this->CustomerInvoiceLine->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerInvoiceLine->create();
			if ($this->CustomerInvoiceLine->save($this->request->data)) {
				$this->Session->setFlash(__('The customer invoice line has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer invoice line could not be saved. Please, try again.'));
			}
		}
		$customerInvoices = $this->CustomerInvoiceLine->CustomerInvoice->find('list');
		$customerOrders = $this->CustomerInvoiceLine->CustomerOrder->find('list');
		$stocks = $this->CustomerInvoiceLine->Stock->find('list');
		$this->set(compact('customerInvoices', 'customerOrders', 'stocks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CustomerInvoiceLine->id = $id;
		if (!$this->CustomerInvoiceLine->exists()) {
			throw new NotFoundException(__('Invalid customer invoice line'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerInvoiceLine->save($this->request->data)) {
				$this->Session->setFlash(__('The customer invoice line has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer invoice line could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CustomerInvoiceLine->read(null, $id);
		}
		$customerInvoices = $this->CustomerInvoiceLine->CustomerInvoice->find('list');
		$customerOrders = $this->CustomerInvoiceLine->CustomerOrder->find('list');
		$stocks = $this->CustomerInvoiceLine->Stock->find('list');
		$this->set(compact('customerInvoices', 'customerOrders', 'stocks'));
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
		$this->CustomerInvoiceLine->id = $id;
		if (!$this->CustomerInvoiceLine->exists()) {
			throw new NotFoundException(__('Invalid customer invoice line'));
		}
		if ($this->CustomerInvoiceLine->delete()) {
			$this->Session->setFlash(__('Customer invoice line deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer invoice line was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
