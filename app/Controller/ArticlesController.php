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
                $this->redirect(array('action' => 'add', $this->request->data['Article']['supplier_slip_id']));
            } else {
                $this->Session->setFlash(__('The article could not be saved. Please, try again.'));
            }
        }
        if (isset($this->request->params['pass'][0])):
            $this->Article->SupplierSlip->id = $this->request->params['pass'][0];
            if (!$this->Article->SupplierSlip->exists()) {
                throw new NotFoundException(__('Invalid supplier slip'));
            }
            $this->request->data['Article']['supplier_slip_id'] = $this->request->params['pass'][0];
            $l = $this->Article->SupplierSlip->read();
            $this->request->data['Article']['supplier_slip_line'] = $l['SupplierSlip']['next_line'];
        endif;
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
