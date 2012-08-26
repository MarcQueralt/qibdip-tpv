<?php
App::uses('AppController', 'Controller');
/**
 * CustomerOrderLines Controller
 *
 * @property CustomerOrderLine $CustomerOrderLine
 */
class CustomerOrderLinesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomerOrderLine->recursive = 0;
		$this->set('customerOrderLines', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CustomerOrderLine->id = $id;
		if (!$this->CustomerOrderLine->exists()) {
			throw new NotFoundException(__('Invalid customer order line'));
		}
		$this->set('customerOrderLine', $this->CustomerOrderLine->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerOrderLine->create();
			if ($this->CustomerOrderLine->save($this->request->data)) {
				$this->Session->setFlash(__('The customer order line has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer order line could not be saved. Please, try again.'));
			}
		}
		$customerOrders = $this->CustomerOrderLine->CustomerOrder->find('list');
		$orderStatuses = $this->CustomerOrderLine->OrderStatus->find('list');
		$stocks = $this->CustomerOrderLine->Stock->find('list');
		$customerInvoices = $this->CustomerOrderLine->CustomerInvoice->find('list');
		$this->set(compact('customerOrders', 'orderStatuses', 'stocks', 'customerInvoices'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CustomerOrderLine->id = $id;
		if (!$this->CustomerOrderLine->exists()) {
			throw new NotFoundException(__('Invalid customer order line'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerOrderLine->save($this->request->data)) {
				$this->Session->setFlash(__('The customer order line has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer order line could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CustomerOrderLine->read(null, $id);
		}
		$customerOrders = $this->CustomerOrderLine->CustomerOrder->find('list');
		$orderStatuses = $this->CustomerOrderLine->OrderStatus->find('list');
		$stocks = $this->CustomerOrderLine->Stock->find('list');
		$customerInvoices = $this->CustomerOrderLine->CustomerInvoice->find('list');
		$this->set(compact('customerOrders', 'orderStatuses', 'stocks', 'customerInvoices'));
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
		$this->CustomerOrderLine->id = $id;
		if (!$this->CustomerOrderLine->exists()) {
			throw new NotFoundException(__('Invalid customer order line'));
		}
		if ($this->CustomerOrderLine->delete()) {
			$this->Session->setFlash(__('Customer order line deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer order line was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
