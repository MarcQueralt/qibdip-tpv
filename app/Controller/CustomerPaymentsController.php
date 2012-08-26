<?php
App::uses('AppController', 'Controller');
/**
 * CustomerPayments Controller
 *
 * @property CustomerPayment $CustomerPayment
 */
class CustomerPaymentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CustomerPayment->recursive = 0;
		$this->set('customerPayments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CustomerPayment->id = $id;
		if (!$this->CustomerPayment->exists()) {
			throw new NotFoundException(__('Invalid customer payment'));
		}
		$this->set('customerPayment', $this->CustomerPayment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerPayment->create();
			if ($this->CustomerPayment->save($this->request->data)) {
				$this->Session->setFlash(__('The customer payment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer payment could not be saved. Please, try again.'));
			}
		}
		$customerOrders = $this->CustomerPayment->CustomerOrder->find('list');
		$this->set(compact('customerOrders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CustomerPayment->id = $id;
		if (!$this->CustomerPayment->exists()) {
			throw new NotFoundException(__('Invalid customer payment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CustomerPayment->save($this->request->data)) {
				$this->Session->setFlash(__('The customer payment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer payment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CustomerPayment->read(null, $id);
		}
		$customerOrders = $this->CustomerPayment->CustomerOrder->find('list');
		$this->set(compact('customerOrders'));
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
		$this->CustomerPayment->id = $id;
		if (!$this->CustomerPayment->exists()) {
			throw new NotFoundException(__('Invalid customer payment'));
		}
		if ($this->CustomerPayment->delete()) {
			$this->Session->setFlash(__('Customer payment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Customer payment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
