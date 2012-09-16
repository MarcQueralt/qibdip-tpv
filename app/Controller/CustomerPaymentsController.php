<?php

App::uses('AppController', 'Controller');

/**
 * CustomerPayments Controller
 *
 * @property CustomerPayment $CustomerPayment
 */
class CustomerPaymentsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->CustomerPayment->recursive = 0;
        $this->set('customerPayments', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->CustomerPayment->id = $id;
        if (!$this->CustomerPayment->exists()) {
            throw new NotFoundException(__('Invalid customer payment'));
        }
        $this->set('customerPayment', $this->CustomerPayment->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            /* link payment to customer based on order - begin */
            $c = $this->CustomerPayment->CustomerOrder->read(null, $this->request->data['CustomerPayment']['customer_order_id']);
            $this->request->data['CustomerPayment']['customer_id'] = $c['CustomerOrder']['customer_id'];
            /* link payment to customer based on order - end */
            $this->CustomerPayment->create();
            if ($this->CustomerPayment->save($this->request->data)) {
                $this->Session->setFlash(__('The customer payment has been saved'));
                $this->redirect(array('controller' => 'CustomerOrders', 'action' => 'view', $this->request->data['CustomerPayment']['customer_order_id']));
            } else {
                $this->Session->setFlash(__('The customer payment could not be saved. Please, try again.'));
            }
        }
        $customers = $this->CustomerPayment->Customer->find('list');
        $customerOrders = $this->CustomerPayment->CustomerOrder->find('list');
        $this->set(compact('customers', 'customerOrders'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->CustomerPayment->id = $id;
        if (!$this->CustomerPayment->exists()) {
            throw new NotFoundException(__('Invalid customer payment'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            /* link payment to customer based on order - begin */
            $c = $this->CustomerPayment->CustomerOrder->read(null, $this->request->data['CustomerPayment']['customer_order_id']);
            $this->request->data['CustomerPayment']['customer_id'] = $c['CustomerOrder']['customer_id'];
            /* link payment to customer based on order - end */
            if ($this->CustomerPayment->save($this->request->data)) {
                $this->Session->setFlash(__('The customer payment has been saved'));
                $this->redirect(array('controller' => 'CustomerOrders', 'action' => 'view', $this->request->data['CustomerPayment']['customer_order_id']));
            } else {
                $this->Session->setFlash(__('The customer payment could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->CustomerPayment->read(null, $id);
        }
        $customers = $this->CustomerPayment->Customer->find('list');
        $customerOrders = $this->CustomerPayment->CustomerOrder->find('list');
        $this->set(compact('customers', 'customerOrders'));
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
        $this->CustomerPayment->id = $id;
        if (!$this->CustomerPayment->exists()) {
            throw new NotFoundException(__('Invalid customer payment'));
        }
        $old = $this->CustomerPayment->read(null, $id);
        $desti = $old['CustomerPayment']['customer_order_id'];
        if ($this->CustomerPayment->delete()) {
            $this->Session->setFlash(__('Customer payment deleted'));
            $this->redirect(array('controller' => 'CustomerOrders', 'action' => 'view', $desti));
        }
        $this->Session->setFlash(__('Customer payment was not deleted'));
        $this->redirect(array('action' => 'view', $id));
    }

}
