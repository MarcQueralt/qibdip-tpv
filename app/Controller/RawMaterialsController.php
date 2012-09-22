<?php

App::uses('AppController', 'Controller');

/**
 * RawMaterials Controller
 *
 * @property RawMaterial $RawMaterial
 */
class RawMaterialsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->RawMaterial->recursive = 0;
        $this->set('rawMaterials', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->RawMaterial->id = $id;
        if (!$this->RawMaterial->exists()) {
            throw new NotFoundException(__('Invalid raw material'));
        }
        $this->set('rawMaterial', $this->RawMaterial->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->RawMaterial->create();
            if ($this->RawMaterial->save($this->request->data)) {
                $this->Session->setFlash(__('The raw material has been saved'));
                $this->redirect(array('action' => 'add', $this->request->data['RawMaterial']['supplier_slip_id']));
            } else {
                $this->Session->setFlash(__('The raw material could not be saved. Please, try again.'));
            }
        }
        if (isset($this->request->params['pass'][0])):
            $this->RawMaterial->SupplierSlip->id = $this->request->params['pass'][0];
            if (!$this->RawMaterial->SupplierSlip->exists()) {
                throw new NotFoundException(__('Invalid supplier slip'));
            }
            $this->request->data['RawMaterial']['supplier_slip_id'] = $this->request->params['pass'][0];
            $l=$this->RawMaterial->SupplierSlip->read();
            $this->request->data['RawMaterial']['supplier_slip_line']=$l['SupplierSlip']['next_line'];
        endif;
        $this->loadModel('Option');
        $option = $this->Option->read(null, 1);
        $this->request->data['RawMaterial']['expected_vat'] = $option['Option']['vat'];
        $this->request->data['RawMaterial']['expected_vat_re'] = $option['Option']['vat_re'];
        $this->request->data['RawMaterial']['stock_type'] = 'M';
        $rawMaterialTypes = $this->RawMaterial->RawMaterialType->find('list');
        $supplierSlips = $this->RawMaterial->SupplierSlip->find('list');
        $supplierInvoices = $this->RawMaterial->SupplierInvoice->find('list');
        $this->set(compact('rawMaterialTypes', 'supplierSlips', 'supplierInvoices'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->RawMaterial->id = $id;
        if (!$this->RawMaterial->exists()) {
            throw new NotFoundException(__('Invalid raw material'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->RawMaterial->save($this->request->data)) {
                $this->Session->setFlash(__('The raw material has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The raw material could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->RawMaterial->read(null, $id);
        }
        $this->loadModel('Option');
        $option = $this->Option->read(null, 1);
        $this->request->data['RawMaterial']['expected_vat'] = $option['Option']['vat'];
        $this->request->data['RawMaterial']['expected_vat_re'] = $option['Option']['vat_re'];
        $rawMaterialTypes = $this->RawMaterial->RawMaterialType->find('list');
        $supplierSlips = $this->RawMaterial->SupplierSlip->find('list');
        $supplierInvoices = $this->RawMaterial->SupplierInvoice->find('list');
        $this->set(compact('rawMaterialTypes', 'supplierSlips', 'supplierInvoices'));
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
        $this->RawMaterial->id = $id;
        if (!$this->RawMaterial->exists()) {
            throw new NotFoundException(__('Invalid raw material'));
        }
        if ($this->RawMaterial->delete()) {
            $this->Session->setFlash(__('Raw material deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Raw material was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
