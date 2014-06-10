<?php
App::uses('AppController', 'Controller');
/**
 * Estudiantes Controller
 *
 * @property Estudiante $Estudiante
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EstudiantesController extends AppController {


    public $components = array('Paginator', 'Session');


    public function beforeFilter() {
        parent::beforeFilter();
        //determinar cual es la accion que se esta llamando
        if(in_array($this->action, array("aut_add"))){
            $this->layout="default-back"; 
        }

        //permitir funcion de registro de usuario
        $this->Auth->allow('aut_add');
    }
    
/*
 * Metodos para perfil de Autor
 */

    public function aut_add() {
            if ($this->request->is('post')) {
                    $this->Estudiante->create();
                    if ($this->Estudiante->save($this->request->data)) {
                            $this->Session->setFlash(__('The estudiante has been saved.'));
                            //avanzar al registro del estudiante como usuario del sistema
                            //cifrar y enviar id estudiante (hash)
                            //cifrar y enviar el rol de estudiante (hash2)
                            $p1 = $this->encrypt_decrypt("encrypt", $this->Estudiante->id);
                            $p2 = $this->encrypt_decrypt("encrypt", "Autor");
                            return $this->redirect(array('controller' => 'users', 'action' => "aut_add?hash={$p1}&hash2={$p2}"));
                    } else {
                            $this->Session->setFlash(__('The estudiante could not be saved. Please, try again.'));
                    }
            }
            $programas = $this->Estudiante->Programa->find('list');
            $this->set(compact('programas'));
    }


/*
 *  Metodos para perfil de Administrador
 */
    
    public function index() {
            $this->Estudiante->recursive = 0;
            $this->set('estudiantes', $this->Paginator->paginate());
    }

    
    public function view($id = null) {
            if (!$this->Estudiante->exists($id)) {
                    throw new NotFoundException(__('Invalid estudiante'));
            }
            $options = array('conditions' => array('Estudiante.' . $this->Estudiante->primaryKey => $id));
            $this->set('estudiante', $this->Estudiante->find('first', $options));
    }

    
    public function add() {
            if ($this->request->is('post')) {
                    $this->Estudiante->create();
                    if ($this->Estudiante->save($this->request->data)) {
                            $this->Session->setFlash(__('The estudiante has been saved.'));
                            return $this->redirect(array('action' => 'index'));
                    } else {
                            $this->Session->setFlash(__('The estudiante could not be saved. Please, try again.'));
                    }
            }
            $programas = $this->Estudiante->Programa->find('list');
            $this->set(compact('programas'));
    }
  
    
    public function edit($id = null) {
            if (!$this->Estudiante->exists($id)) {
                    throw new NotFoundException(__('Invalid estudiante'));
            }
            if ($this->request->is(array('post', 'put'))) {
                    if ($this->Estudiante->save($this->request->data)) {
                            $this->Session->setFlash(__('The estudiante has been saved.'));
                            return $this->redirect(array('action' => 'index'));
                    } else {
                            $this->Session->setFlash(__('The estudiante could not be saved. Please, try again.'));
                    }
            } else {
                    $options = array('conditions' => array('Estudiante.' . $this->Estudiante->primaryKey => $id));
                    $this->request->data = $this->Estudiante->find('first', $options);
            }
            $programas = $this->Estudiante->Programa->find('list');
            $this->set(compact('programas'));
    }

    
    public function delete($id = null) {
            $this->Estudiante->id = $id;
            if (!$this->Estudiante->exists()) {
                    throw new NotFoundException(__('Invalid estudiante'));
            }
            $this->request->onlyAllow('post', 'delete');
            if ($this->Estudiante->delete()) {
                    $this->Session->setFlash(__('The estudiante has been deleted.'));
            } else {
                    $this->Session->setFlash(__('The estudiante could not be deleted. Please, try again.'));
            }
            return $this->redirect(array('action' => 'index'));
    }
        
}
