<?php

App::uses('AppController', 'Controller');

/**
 * CustomerInvoices Controller
 *
 * @property CustomerInvoice $CustomerInvoice
 */
class CustomerInvoicesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->CustomerInvoice->recursive = 0;
        $this->set('customerInvoices', $this->paginate());
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
        $this->CustomerInvoice->recursive=2;
        if (!$this->CustomerInvoice->exists()) {
            throw new NotFoundException(__('Invalid customer invoice'));
        }
        $this->set('customerInvoice', $this->CustomerInvoice->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->CustomerInvoice->create();
            if ($this->CustomerInvoice->save($this->request->data)) {
                $this->Session->setFlash(__('The customer invoice has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The customer invoice could not be saved. Please, try again.'));
            }
        }
        $customers = $this->CustomerInvoice->Customer->find('list');
        $invoiceGroups = $this->CustomerInvoice->InvoiceGroup->find('list');
        $invoiceStatuses = $this->CustomerInvoice->InvoiceStatus->find('list');
        $this->set(compact('customers', 'invoiceGroups', 'invoiceStatuses'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->CustomerInvoice->id = $id;
        if (!$this->CustomerInvoice->exists()) {
            throw new NotFoundException(__('Invalid customer invoice'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->CustomerInvoice->save($this->request->data)) {
                $this->Session->setFlash(__('The customer invoice has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The customer invoice could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->CustomerInvoice->read(null, $id);
        }
        $customers = $this->CustomerInvoice->Customer->find('list');
        $invoiceGroups = $this->CustomerInvoice->InvoiceGroup->find('list');
        $invoiceStatuses = $this->CustomerInvoice->InvoiceStatus->find('list');
        $this->set(compact('customers', 'invoiceGroups', 'invoiceStatuses'));
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

    public function invoice() {
        if ($this->request->is('post')) {
            if ('' == $this->request->data['CustomerInvoice']['customer_invoice_number']):
                $this->Session->setFlash(__('The customer invoice number provider is not valid.'));
                $this->redirect(array('action' => 'invoice', $this->request->data['CustomerInvoice']['customer_order_id']));
            endif;
            $errorCrear = false;
            $datasource = $this->CustomerInvoice->getDataSource();
            $datasource->begin();
            $this->CustomerInvoice->create();
            if ($this->CustomerInvoice->save($this->request->data)) {
                $invoiceId = $this->CustomerInvoice->id;
                $lines = $this->CustomerInvoice->CustomerOrderLine->find('all', array(
                    'conditions' => array(
                        'customer_invoice_id is null',
                        'customer_order_id' => $this->request->data['CustomerInvoice']['customer_order_id'],
                    ),
                    'recursive' => 0,
                        ));
                $i = 0;
                foreach ($lines as $line):
                    $i++;
                    $line['CustomerOrderLine']['customer_invoice_id'] = $invoiceId;
                    $line['CustomerOrderLine']['customer_invoice_line_number'] = $i;
                    if (!$this->CustomerInvoice->CustomerOrderLine->save($line)):
                        $errorCrear = true;
                        $this->Session->setFlash(__('The customer order line could not be processed.'));
                    endif;
                endforeach;
                $order = $this->CustomerInvoice->CustomerOrderLine->CustomerOrder->read(null, $this->request->data['CustomerInvoice']['customer_order_id']);
                $order['CustomerOrder']['order_status_id'] = $this->request->data['CustomerInvoice']['customer_order_status_id'];
                if (!$this->CustomerInvoice->CustomerOrderLine->CustomerOrder->save($order)):
                    $errorCrear = true;
                    $this->Session->setFlash(__('The customer invoice could not be created. Customer Order can not be edited.'));
                endif;
            } else {
                $this->Session->setFlash(__('The customer invoice could not be saved. Please, try again.'));
                $errorCrear = true;
            }
            if (!$errorCrear) {
                $datasource->commit();
                $this->redirect(array('action' => 'view', $invoiceId));
            } else {
                $datasource->rollback();
            }
        }
        if (isset($this->request->params['pass'][0])):
            $this->CustomerInvoice->CustomerOrderLine->CustomerOrder->id = $this->request->params['pass'][0];
            if (!$this->CustomerInvoice->CustomerOrderLine->CustomerOrder->exists()) {
                throw new NotFoundException(__('Invalid customer order'));
            }
            $comanda = $this->CustomerInvoice->CustomerOrderLine->CustomerOrder->read();
            if (0 == $comanda['CustomerOrder']['lines_not_invoiced']):
                $this->Session->setFlash(__("There're no lines to invoice"));
                $this->redirect(array('action' => 'view', 'controller' => 'CustomerOrders', $comanda['CustomerOrder']['id']));
            endif;
            $this->request->data['CustomerInvoice']['customer_id'] = $comanda['CustomerOrder']['customer_id'];
            $this->request->data['CustomerInvoice']['customer_order_id'] = $this->request->params['pass'][0];
            $this->request->data['CustomerInvoice']['customer_invoice_date'] = date('Y-m-d');
        endif;
        $invoiceGroups = $this->CustomerInvoice->InvoiceGroup->find('list', array('conditions' => array('active' => 'true')));
        $invoiceNumbers = $this->CustomerInvoice->InvoiceGroup->find('list', array('conditions' => array('active' => 'true'), 'fields' => array('next_number')));
        $invoiceStatuses = $this->CustomerInvoice->InvoiceStatus->find('list');
        $this->loadModel('Option');
        $option = $this->Option->read(null, 1);
        $groupId = $this->Option->data['Option']['customer_invoice_group_id'];
        $orderNewStatusId = $this->Option->data['Option']['order_invoiced_status_id'];
        $invoiceStatusId = $this->Option->data['Option']['customer_invoice_status_id'];
        $invoiceNumber = $this->Option->data['InvoiceGroup']['next_number'];
        $this->set(compact('invoiceGroups', 'invoiceStatuses', 'invoiceNumbers', 'groupId', 'invoiceNumber', 'orderNewStatusId', 'invoiceStatusId'));
    }

    public function printer($id = null) {
        $this->CustomerInvoice->id = $id;
        $this->set('customerInvoice', $this->CustomerInvoice->read(null, $id));
        if (!$this->CustomerInvoice->exists()) {
            throw new NotFoundException(__('Invalid customer invoice'));
        }
        $this->layout = 'pdf';
        $this->render();
    }

}