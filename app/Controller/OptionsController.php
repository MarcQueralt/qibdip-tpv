<?php

App::uses('AppController', 'Controller');

/**
 * Options Controller
 *
 * @property Option $Option
 */
class OptionsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
//		$this->Option->recursive = 0;
//		$this->set('options', $this->paginate());
        $this->redirect(array('action' => 'view'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
//		$this->Option->id = $id;
        $this->Option->id = 1;
        if (!$this->Option->exists()) {
            throw new NotFoundException(__('Invalid option'));
        }
        $this->set('option', $this->Option->read(null, $id));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Option->id = 1;
        if (!$this->Option->exists()) {
            throw new NotFoundException(__('Invalid option'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Option->save($this->request->data)) {
                $this->Session->setFlash(__('The option has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The option could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Option->read(null, $id);
        }
        $OrderStatuses=$this->Option->OrderStatus->find('list');
        $CustomerInvoiceStatuses=  $this->Option->CustomerInvoiceStatus->find('list');
        $SupplierInvoiceStatuses=$this->Option->SupplierInvoiceStatus->find('list');
        $this->loadModel('InvoiceGroup');
        $InvoiceGroups=$this->InvoiceGroup->find('list',array('conditions'=>array('active'=>'true')));
        $this->set(compact('OrderStatuses','CustomerInvoiceStatuses','SupplierInvoiceStatuses','InvoiceGroups'));
    }

}
