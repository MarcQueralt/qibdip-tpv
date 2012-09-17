<?php

App::uses('AppController', 'Controller');
App::import('Option');

/**
 * Articles Controller
 *
 * @property Article $Article
 */
class ArticlesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Article->recursive = 0;
        $this->set('articles', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Article->id = $id;
        if (!$this->Article->exists()) {
            throw new NotFoundException(__('Invalid article'));
        }
        $this->set('article', $this->Article->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Article->create();
            if ($this->Article->save($this->request->data)) {
                $this->Session->setFlash(__('The article has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The article could not be saved. Please, try again.'));
            }
        }
        $this->loadModel('Option');
        $option = $this->Option->read(null, 1);
        $this->request->data['Article']['expected_vat'] = $option['Option']['vat'];
        $this->request->data['Article']['expected_vat_re'] = $option['Option']['vat_re'];
        $this->request->data['Article']['stock_type'] = 'A';
        $supplierSlips = $this->Article->SupplierSlip->find('list');
        $supplierInvoices = $this->Article->SupplierInvoice->find('list');
        $this->set(compact('supplierSlips', 'supplierInvoices'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Article->id = $id;
        if (!$this->Article->exists()) {
            throw new NotFoundException(__('Invalid article'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Article->save($this->request->data)) {
                $this->Session->setFlash(__('The article has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The article could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Article->read(null, $id);
        }
        $this->loadModel('Option');
        $option = $this->Option->read(null, 1);
        $this->request->data['Article']['expected_vat'] = $option['Option']['vat'];
        $this->request->data['Article']['expected_vat_re'] = $option['Option']['vat_re'];
        $supplierSlips = $this->Article->SupplierSlip->find('list');
        $supplierInvoices = $this->Article->SupplierInvoice->find('list');
        $this->set(compact('supplierSlips', 'supplierInvoices'));
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
        $this->Article->id = $id;
        if (!$this->Article->exists()) {
            throw new NotFoundException(__('Invalid article'));
        }
        if ($this->Article->delete()) {
            $this->Session->setFlash(__('Article deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Article was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
