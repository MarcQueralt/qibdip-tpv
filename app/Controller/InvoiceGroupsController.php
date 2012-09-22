<?php
App::uses('AppController', 'Controller');
/**
 * InvoiceGroups Controller
 *
 * @property InvoiceGroup $InvoiceGroup
 */
class InvoiceGroupsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InvoiceGroup->recursive = 0;
		$this->set('invoiceGroups', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->InvoiceGroup->id = $id;
		if (!$this->InvoiceGroup->exists()) {
			throw new NotFoundException(__('Invalid invoice group'));
		}
		$this->set('invoiceGroup', $this->InvoiceGroup->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InvoiceGroup->create();
			if ($this->InvoiceGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The invoice group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice group could not be saved. Please, try again.'));
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
		$this->InvoiceGroup->id = $id;
		if (!$this->InvoiceGroup->exists()) {
			throw new NotFoundException(__('Invalid invoice group'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->InvoiceGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The invoice group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice group could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->InvoiceGroup->read(null, $id);
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
		$this->InvoiceGroup->id = $id;
		if (!$this->InvoiceGroup->exists()) {
			throw new NotFoundException(__('Invalid invoice group'));
		}
		if ($this->InvoiceGroup->delete()) {
			$this->Session->setFlash(__('Invoice group deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Invoice group was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
