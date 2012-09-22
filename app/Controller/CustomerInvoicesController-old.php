<?php

App::uses('AppController', 'Controller');

/**
 * CustomerInvoices Controller
 *
 * @property CustomerInvoice $CustomerInvoice
 * @property MpdfComponent $Mpdf
 */
class CustomerInvoicesController extends AppController {

    /**
     * Helpers
     *
     * @var array
     */
    public $helpers = array('Number');

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Mpdf.Mpdf');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->CustomerInvoice->recursive = 0;
        $this->set('customerInvoices', $this->paginate());
    }

    public function invoice() {
        /* TODO acabar */
        if ($this->request->is('post')) {
            $datasource = $this->CustomerInvoice->getDataSource();
            $datasource->begin();
            $this->CustomerInvoice->create();
//            if ($this->CustomerInvoice->save($this->request->data)) {
//                $this->Session->setFlash(__('The customer invoice has been saved'));
//                $this->redirect(array('action' => 'index'));
//            } else {
                $this->Session->setFlash(__('The customer invoice could not be saved. Please, try again.'));
                $datasource->rollback();
//            }
        }
        if (isset($this->request->params['pass'][0])):
            $this->CustomerInvoice->CustomerOrderLine->CustomerOrder->id = $this->request->params['pass'][0];
            if (!$this->CustomerInvoice->CustomerOrderLine->CustomerOrder->exists()) {
                throw new NotFoundException(__('Invalid customer order'));
            }
            $comanda=$this->CustomerInvoice->CustomerOrderLine->CustomerOrder->read();
            $this->request->data['CustomerInvoice']['customer_id']=$comanda['CustomerOrder']['customer_id'];
            $this->request->data['CustomerInvoice']['customer_order_id'] = $this->request->params['pass'][0];
            $this->request->data['CustomerInvoice']['customer_invoice_date']=date('Y-m-d');
        endif;
        $series=$this->CustomerInvoice->Serie->find('list',array('conditions'=>array('active'=>'true')));
        $this->set(compact('series'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->CustomerInvoice->id = $id;
        if (!$this->CustomerInvoice->exists()) {
            throw new NotFoundException(__('Invalid customer invoice'));
        }
        $this->set('customerInvoice', $this->CustomerInvoice->read(null, $id));
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
        $this->CustomerInvoice->id = $id;
        if (!$this->CustomerInvoice->exists()) {
            throw new NotFoundException(__('Invalid customer invoice'));
        }
        if ($this->CustomerInvoice->delete()) {
            $this->Session->setFlash(__('Customer invoice deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Customer invoice was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
