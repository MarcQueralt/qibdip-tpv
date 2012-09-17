<?php

App::uses('AppController', 'Controller');

/**
 * SupplierSlips Controller
 *
 * @property SupplierSlip $SupplierSlip
 */
class SupplierSlipsController extends AppController {

    /**
     * Helpers
     *
     * @var array
     */
    public $helpers = array('Number');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->SupplierSlip->recursive = 0;
        $this->set('supplierSlips', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->SupplierSlip->id = $id;
        if (!$this->SupplierSlip->exists()) {
            throw new NotFoundException(__('Invalid supplier slip'));
        }
        $this->set('supplierSlip', $this->SupplierSlip->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->SupplierSlip->create();
            if ($this->SupplierSlip->save($this->request->data)) {
                $this->Session->setFlash(__('The supplier slip has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The supplier slip could not be saved. Please, try again.'));
            }
        }
        $suppliers = $this->SupplierSlip->Supplier->find('list');
        $this->set(compact('suppliers'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->SupplierSlip->id = $id;
        if (!$this->SupplierSlip->exists()) {
            throw new NotFoundException(__('Invalid supplier slip'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->SupplierSlip->save($this->request->data)) {
                $this->Session->setFlash(__('The supplier slip has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The supplier slip could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->SupplierSlip->read(null, $id);
        }
        $suppliers = $this->SupplierSlip->Supplier->find('list');
        $this->set(compact('suppliers'));
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
        $this->SupplierSlip->id = $id;
        if (!$this->SupplierSlip->exists()) {
            throw new NotFoundException(__('Invalid supplier slip'));
        }
        if ($this->SupplierSlip->delete()) {
            $this->Session->setFlash(__('Supplier slip deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Supplier slip was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
