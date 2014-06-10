<?php
App::uses('AppController', 'Controller');
/**
 * Propuestas Controller
 *
 * @property Propuesta $Propuesta
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PropuestasController extends AppController {

    
    public $components = array('Paginator', 'Session');

    
    public function beforeFilter() {
        parent::beforeFilter();
        //dependiendo de la accion llamada, cargar un determinado layout
        if(in_array($this->action, array("aut_add","aut_index","aut_edit","aut_view"))){
            $this->layout="layout_admin_autor";              
        }
    }

/*
 * Metodos para el rol Autor
 */
 
    public function aut_index() {
            $this->Propuesta->recursive = 0;
            $r = $this->paginate('Propuesta', array('Propuesta.trabajo_id'=> $this->Session->read('tra_ses.id')));
            $this->set('propuestas', $r);
    }

    
    public function aut_view() {
            if(isset($_GET['hash'])){
                $id = $this->encrypt_decrypt('decrypt', $_GET['hash']);
            }
            if (!$this->Propuesta->exists($id)) {
                    throw new NotFoundException(__('Invalid propuesta'));
            }
            $options = array('conditions' => array('Propuesta.' . $this->Propuesta->primaryKey => $id));
            $this->set('propuesta', $this->Propuesta->find('first', $options));
    }
    
    
    public function aut_add() {
            if ($this->request->is('post')) {
                    $this->Propuesta->create();
                    if ($this->Propuesta->save($this->request->data)) {
                            $this->Session->setFlash(__('The propuesta has been saved.'));
                            return $this->redirect(array('action' => 'aut_index'));
                    } else {
                            $this->Session->setFlash(__('The propuesta could not be saved. Please, try again.'));
                    }
            }
            $tra_id = $this->Session->read('tra_ses.id'); 
            $trabajos = $this->Propuesta->Trabajo->find('list', array('conditions'=>array('Trabajo.id'=>$tra_id)));
            $programas = $this->Propuesta->Programa->find('list');
            $this->set(compact('trabajos', 'programas'));
    }

    
    public function aut_edit() {

            if ($this->request->is(array('post', 'put'))) {
                    if ($this->Propuesta->save($this->request->data)) {
                            $this->Session->setFlash(__('The propuesta has been saved.'));
                            return $this->redirect(array('action' => 'aut_index'));
                    } else {
                            $this->Session->setFlash(__('The propuesta could not be saved. Please, try again.'));
                    }
            } else {
                    if(isset($_GET['hash'])){
                        $id = $this->encrypt_decrypt('decrypt', $_GET['hash']);
                    }
                    $options = array('conditions' => array('Propuesta.' . $this->Propuesta->primaryKey => $id));
                    $this->request->data = $this->Propuesta->find('first', $options);
            }
            $programas = $this->Propuesta->Programa->find('list');
            $this->set(compact('trabajos', 'programas'));
    }
    
    
    public function aut_delete() {
        if(isset($_GET['hash'])){
            $id = $this->encrypt_decrypt('decrypt', $_GET['hash']);
        }
        $this->Propuesta->id = $id;
        if (!$this->Propuesta->exists()) {
                throw new NotFoundException(__('Invalid propuesta'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Propuesta->delete()) {
                $this->Session->setFlash(__('The propuesta has been deleted.'));
        } else {
                $this->Session->setFlash(__('The propuesta could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'aut_index'));
    }


/*
 * Metodos para el rol Administrador
*/
    
    public function add() {
        if ($this->request->is('post')) {
                $this->Propuesta->create();
                if ($this->Propuesta->save($this->request->data)) {
                        $this->Session->setFlash(__('The propuesta has been saved.'));
                        return $this->redirect(array('action' => 'index'));
                } else {
                        $this->Session->setFlash(__('The propuesta could not be saved. Please, try again.'));
                }
        }
        $trabajos = $this->Propuesta->Trabajo->find('list');
        $programas = $this->Propuesta->Programa->find('list');
        $this->set(compact('trabajos', 'programas'));
    }
    
    
    public function delete() {
            if(isset($_GET['hash'])){
                $id = $this->encrypt_decrypt('decrypt', $_GET['hash']);
            }
            $this->Propuesta->id = $id;
            if (!$this->Propuesta->exists()) {
                    throw new NotFoundException(__('Invalid propuesta'));
            }
            $this->request->onlyAllow('post', 'delete');
            if ($this->Propuesta->delete()) {
                    $this->Session->setFlash(__('The propuesta has been deleted.'));
            } else {
                    $this->Session->setFlash(__('The propuesta could not be deleted. Please, try again.'));
            }
            return $this->redirect(array('action' => 'index'));
    }

}
