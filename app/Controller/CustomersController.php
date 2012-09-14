<?php

App::uses('AppController', 'Controller');

/**
 * Customers Controller
 *
 * @property Customer $Customer
 */
class CustomersController extends AppController {
    public $paginate = array();
    /**
     *  search method 
     */
    function search() {
        // the page will redirect to
        $url['action'] = 'index';
        // build a URL with all the Search elements in it
        if (isset($this->data)):
            foreach ($this->data as $k => $v):
                foreach ($v as $kk => $vv):
                    if ('' != $vv):
                        $url[$k . '.' . $kk] = $vv;
                    endif;
                endforeach;
            endforeach;
        endif;
        $this->redirect($url, null, true);
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Customer->recursive = 0;
        if(isset($this->passedArgs['Search.customer_name'])):
            $searchedName = $this->passedArgs['Search.customer_name'];
            $this->paginate['conditions'][]['Customer.customer_name LIKE'] = "%$searchedName%";
        endif;
        $this->set('customers', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Customer->id = $id;
        $this->Customer->recursive = 2;
        if (!$this->Customer->exists()) {
            throw new NotFoundException(__('Invalid customer'));
        }
        $this->set('customer', $this->Customer->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Customer->create();
            if ($this->Customer->save($this->request->data)) {
                $this->Session->setFlash(__('The customer has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The customer could not be saved. Please, try again.'));
            }
        }
        $towns = $this->Customer->Town->find('list');
        $this->set(compact('towns'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Customer->id = $id;
        if (!$this->Customer->exists()) {
            throw new NotFoundException(__('Invalid customer'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Customer->save($this->request->data)) {
                $this->Session->setFlash(__('The customer has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The customer could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Customer->read(null, $id);
        }
        $towns = $this->Customer->Town->find('list');
        $this->set(compact('towns'));
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
        $this->Customer->id = $id;
        if (!$this->Customer->exists()) {
            throw new NotFoundException(__('Invalid customer'));
        }
        if ($this->Customer->delete()) {
            $this->Session->setFlash(__('Customer deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Customer was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
