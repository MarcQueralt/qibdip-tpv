<?php

App::uses('AppController', 'Controller');

/**
 * CustomerOrderLines Controller
 *
 * @property CustomerOrderLine $CustomerOrderLine
 */
class CustomerOrderLinesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->CustomerOrderLine->recursive = 0;
        $this->set('customerOrderLines', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->CustomerOrderLine->id = $id;
        if (!$this->CustomerOrderLine->exists()) {
            throw new NotFoundException(__('Invalid customer order line'));
        }
        $this->set('customerOrderLine', $this->CustomerOrderLine->read(null, $id));
    }

    public function viewSale($id = null) {
        $this->CustomerOrderLine->id = $id;
        $this->CustomerOrderLine->recursive=2;
        if (!$this->CustomerOrderLine->exists()) {
            throw new NotFoundException(__('Invalid customer order line'));
        }
        $this->set('customerOrderLine', $this->CustomerOrderLine->read(null, $id));
    }

    public function viewService($id = null) {
        $this->CustomerOrderLine->id = $id;
        if (!$this->CustomerOrderLine->exists()) {
            throw new NotFoundException(__('Invalid customer order line'));
        }
        $this->set('customerOrderLine', $this->CustomerOrderLine->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->CustomerOrderLine->create();
            if ($this->CustomerOrderLine->save($this->request->data)) {
                $this->Session->setFlash(__('The customer order line has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The customer order line could not be saved. Please, try again.'));
            }
        }
        $customerOrders = $this->CustomerOrderLine->CustomerOrder->find('list');
        $stocks = $this->CustomerOrderLine->Stock->find('list');
        $customerInvoices = $this->CustomerOrderLine->CustomerInvoice->find('list');
        $this->set(compact('customerOrders', 'stocks', 'customerInvoices'));
    }

    public function addService() {
        if ($this->request->is('post')) {
            $this->CustomerOrderLine->create();
            $total = $this->request->data['CustomerOrderLine']['order_line_amount'];
            $this->request->data['CustomerOrderLine']['order_line_amount'] = round($total / (1 + $this->request->data['CustomerOrderLine']['expected_vat']), 2);
            $this->request->data['CustomerOrderLine']['order_line_vat'] = $total - $this->request->data['CustomerOrderLine']['order_line_amount'];
            if ($this->CustomerOrderLine->save($this->request->data)) {
                $this->Session->setFlash(__('The customer order line has been saved'));
                $this->redirect(array('action' => 'view', 'controller' => 'CustomerOrders', $this->request->data['CustomerOrderLine']['customer_order_id']));
            } else {
                $this->Session->setFlash(__('The customer order line could not be saved. Please, try again.'));
            }
        }
        if (isset($this->request->params['pass'][0])):
            $this->CustomerOrderLine->CustomerOrder->id = $this->request->params['pass'][0];
            if (!$this->CustomerOrderLine->CustomerOrder->exists()) {
                throw new NotFoundException(__('Invalid customer order'));
            }
            $this->CustomerOrderLine->CustomerOrder->read();
            $this->request->data['CustomerOrderLine']['customer_order_id'] = $this->request->params['pass'][0];
        endif;
        $this->request->data['CustomerOrderLine']['order_line_type'] = 'E';
        $this->request->data['CustomerOrderLine']['order_line_number'] = $this->CustomerOrderLine->CustomerOrder->data['CustomerOrder']['next_line'];
        $this->request->data['CustomerOrderLine']['expected_vat'] = $this->CustomerOrderLine->CustomerOrder->data['CustomerOrder']['expected_vat'];
        $customerOrders = $this->CustomerOrderLine->CustomerOrder->find('list');
        $this->set(compact('customerOrders'));
    }

    public function addSale() {
        if ($this->request->is('post')) {
            $this->CustomerOrderLine->create();
            $total = $this->request->data['CustomerOrderLine']['order_line_total'];
            $this->request->data['CustomerOrderLine']['order_line_amount'] = round($total / (1 + $this->request->data['CustomerOrderLine']['expected_vat']), 2);
            $this->request->data['CustomerOrderLine']['order_line_vat'] = $total - $this->request->data['CustomerOrderLine']['order_line_amount'];
            if ($this->CustomerOrderLine->save($this->request->data)) {
                $this->Session->setFlash(__('The customer order line has been saved'));
                $this->redirect(array('action' => 'view', 'controller' => 'CustomerOrders', $this->request->data['CustomerOrderLine']['customer_order_id']));
            } else {
                $this->Session->setFlash(__('The customer order line could not be saved. Please, try again.'));
            }
        }
        if (isset($this->request->params['pass'][0])):
            $this->CustomerOrderLine->CustomerOrder->id = $this->request->params['pass'][0];
            if (!$this->CustomerOrderLine->CustomerOrder->exists()) {
                throw new NotFoundException(__('Invalid customer order'));
            }
            $this->CustomerOrderLine->CustomerOrder->read();
            $this->request->data['CustomerOrderLine']['customer_order_id'] = $this->request->params['pass'][0];
        endif;
        $this->request->data['CustomerOrderLine']['order_line_type'] = 'A';
        $this->request->data['CustomerOrderLine']['order_line_number'] = $this->CustomerOrderLine->CustomerOrder->data['CustomerOrder']['next_line'];
        $this->request->data['CustomerOrderLine']['expected_vat'] = $this->CustomerOrderLine->CustomerOrder->data['CustomerOrder']['expected_vat'];
        $customerOrders = $this->CustomerOrderLine->CustomerOrder->find('list');
        $stocks = $this->CustomerOrderLine->Stock->find('list');
        $prices = $this->CustomerOrderLine->Stock->find('list', array('fields' => array('id', 'stock_sale_price')));
        $this->set(compact('customerOrders', 'stocks', 'prices'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->CustomerOrderLine->id = $id;
        if (!$this->CustomerOrderLine->exists()) {
            throw new NotFoundException(__('Invalid customer order line'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->CustomerOrderLine->save($this->request->data)) {
                $this->Session->setFlash(__('The customer order line has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The customer order line could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->CustomerOrderLine->read(null, $id);
        }
        $customerOrders = $this->CustomerOrderLine->CustomerOrder->find('list');
        $orderStatuses = $this->CustomerOrderLine->OrderStatus->find('list');
        $stocks = $this->CustomerOrderLine->Stock->find('list');
        $customerInvoices = $this->CustomerOrderLine->CustomerInvoice->find('list');
        $this->set(compact('customerOrders', 'orderStatuses', 'stocks', 'customerInvoices'));
    }

    public function editService($id = null) {
        $this->CustomerOrderLine->id = $id;
        if (!$this->CustomerOrderLine->exists()) {
            throw new NotFoundException(__('Invalid customer order line'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $total = $this->request->data['CustomerOrderLine']['order_line_amount'];
            $this->request->data['CustomerOrderLine']['order_line_amount'] = round($total / (1 + $this->request->data['CustomerOrderLine']['expected_vat']), 2);
            $this->request->data['CustomerOrderLine']['order_line_vat'] = $total - $this->request->data['CustomerOrderLine']['order_line_amount'];
            if ($this->CustomerOrderLine->save($this->request->data)) {
                $this->Session->setFlash(__('The customer order line has been saved'));
                $this->redirect(array('action' => 'view', 'controller' => 'CustomerOrders', $this->request->data['CustomerOrderLine']['customer_order_id']));
            } else {
                $this->Session->setFlash(__('The customer order line could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->CustomerOrderLine->read(null, $id);
        }
        $customerOrders = $this->CustomerOrderLine->CustomerOrder->find('list');
        $stocks = $this->CustomerOrderLine->Stock->find('list');
        $this->set(compact('customerOrders'));
    }

    public function editSale($id = null) {
        $this->CustomerOrderLine->id = $id;
        if (!$this->CustomerOrderLine->exists()) {
            throw new NotFoundException(__('Invalid customer order line'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $total = $this->request->data['CustomerOrderLine']['order_line_total'];
            $this->request->data['CustomerOrderLine']['order_line_amount'] = round($total / (1 + $this->request->data['CustomerOrderLine']['expected_vat']), 2);
            $this->request->data['CustomerOrderLine']['order_line_vat'] = $total - $this->request->data['CustomerOrderLine']['order_line_amount'];
            if ($this->CustomerOrderLine->save($this->request->data)) {
                $this->Session->setFlash(__('The customer order line has been saved'));
                $this->redirect(array('action' => 'view', 'controller' => 'CustomerOrders', $this->request->data['CustomerOrderLine']['customer_order_id']));
            } else {
                $this->Session->setFlash(__('The customer order line could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->CustomerOrderLine->read(null, $id);
        }
        $this->request->data['CustomerOrderLine']['price'] = $this->CustomerOrderLine->data['CustomerOrderLine']['stock_id'];
        $customerOrders = $this->CustomerOrderLine->CustomerOrder->find('list');
        $stocks = $this->CustomerOrderLine->Stock->find('list');
        $prices = $this->CustomerOrderLine->Stock->find('list', array('fields' => array('id', 'stock_sale_price')));
        $this->set(compact('customerOrders', 'stocks', 'prices'));
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
        $this->CustomerOrderLine->id = $id;
        if (!$this->CustomerOrderLine->exists()) {
            throw new NotFoundException(__('Invalid customer order line'));
        }
        $old = $this->CustomerOrderLine->read(null, $id);
        $desti = $old['CustomerOrderLine']['customer_order_id'];
        if ($this->CustomerOrderLine->delete()) {
            $this->Session->setFlash(__('Customer order line deleted'));
            $this->redirect(array('action' => 'view', 'controller' => 'CustomerOrders', $desti));
        }
        $this->Session->setFlash(__('Customer order line was not deleted'));
        $this->redirect(array('action' => 'view', 'controller' => 'CustomerOrders', $desti));
    }

}
