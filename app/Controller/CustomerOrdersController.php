<?php
App::uses('AppController', 'Controller');
/**
 * CustomerOrders Controller
 *
 * @property CustomerOrder $CustomerOrder
 */
class CustomerOrdersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomerOrder->recursive = 0;
		$this->set('customerOrders', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CustomerOrder->id = $id;
		if (!$this->CustomerOrder->exists()) {
			throw new NotFoundException(__('Invalid customer order'));
		}
		$this->set('customerOrder', $this->CustomerOrder->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerOrder->create();
			if ($this->CustomerOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The customer order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer order could not be saved. Please, try again.'));
			}
		}
		$customers = $this->CustomerOrder->Customer->find('list');
		$orderStatuses = $this->CustomerOrder->OrderStatus->find('list');
		$this->set(compact('customers', 'orderStatuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CustomerOrder->id = $id;
		if (!$this->CustomerOrder->exists()) {
			throw new NotFoundException(__('Invalid customer order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The customer order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer order could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CustomerOrder->read(null, $id);
		}
		$customers = $this->CustomerOrder->Customer->find('list');
		$orderStatuses = $this->CustomerOrder->OrderStatus->find('list');
		$this->set(compact('customers', 'orderStatuses'));
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
		$this->CustomerOrder->id = $id;
		if (!$this->CustomerOrder->exists()) {
			throw new NotFoundException(__('Invalid customer order'));
		}
		if ($this->CustomerOrder->delete()) {
			$this->Session->setFlash(__('Customer order deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}