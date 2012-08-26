<?php
App::uses('AppController', 'Controller');
/**
 * Towns Controller
 *
 * @property Town $Town
 */
class TownsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Town->recursive = 0;
		$this->set('towns', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Town->id = $id;
		if (!$this->Town->exists()) {
			throw new NotFoundException(__('Invalid town'));
		}
		$this->set('town', $this->Town->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Town->create();
			if ($this->Town->save($this->request->data)) {
				$this->Session->setFlash(__('The town has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The town could not be saved. Please, try again.'));
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
		$this->Town->id = $id;
		if (!$this->Town->exists()) {
			throw new NotFoundException(__('Invalid town'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Town->save($this->request->data)) {
				$this->Session->setFlash(__('The town has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The town could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Town->read(null, $id);
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
		$this->Town->id = $id;
		if (!$this->Town->exists()) {
			throw new NotFoundException(__('Invalid town'));
		}
		if ($this->Town->delete()) {
			$this->Session->setFlash(__('Town deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Town was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
