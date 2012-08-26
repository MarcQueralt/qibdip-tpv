<?php
App::uses('AppController', 'Controller');
/**
 * RawMaterialTypes Controller
 *
 * @property RawMaterialType $RawMaterialType
 */
class RawMaterialTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RawMaterialType->recursive = 0;
		$this->set('rawMaterialTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RawMaterialType->id = $id;
		if (!$this->RawMaterialType->exists()) {
			throw new NotFoundException(__('Invalid raw material type'));
		}
		$this->set('rawMaterialType', $this->RawMaterialType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RawMaterialType->create();
			if ($this->RawMaterialType->save($this->request->data)) {
				$this->Session->setFlash(__('The raw material type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The raw material type could not be saved. Please, try again.'));
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
		$this->RawMaterialType->id = $id;
		if (!$this->RawMaterialType->exists()) {
			throw new NotFoundException(__('Invalid raw material type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RawMaterialType->save($this->request->data)) {
				$this->Session->setFlash(__('The raw material type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The raw material type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->RawMaterialType->read(null, $id);
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
		$this->RawMaterialType->id = $id;
		if (!$this->RawMaterialType->exists()) {
			throw new NotFoundException(__('Invalid raw material type'));
		}
		if ($this->RawMaterialType->delete()) {
			$this->Session->setFlash(__('Raw material type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Raw material type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
