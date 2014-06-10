<?php
App::uses('AppController', 'Controller');
/**
 * Trabajos Controller
 *
 * @property Trabajo $Trabajo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TrabajosController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $components = array('Paginator', 'Session');


    public function beforeFilter() {
        parent::beforeFilter();
        //determinar cual es la accion que se esta llamando
        if (in_array($this->action, array("aut_add", "aut_edit"))) {
            $this->layout="layout_admin_autor";
        }      
    }

/*
 *  Metodos para perfil de Autor
 */
    
    public function aut_add() {
        if ($this->request->is('post')) {
                $this->Trabajo->create();
                if ($this->Trabajo->save($this->request->data)) {
                        $this->Session->setFlash(__('The trabajo has been saved.'));
                        //registrar autor(es) del trabajo
                        //obtener id de trabajo y de estudiante                                
                        $est_id = $this->Session->read('est_ses.id');
                        $tra_id = $this->Trabajo->id;
                        $this->Session->write('tra_ses.id', $tra_id);
                        //registrar autor del trabajo
                        $author = array("estudiante_id"=>$est_id, "trabajo_id"=>$tra_id);
                        $this->Trabajo->Author->save($author);
                        //redireccion a edicion ya que solo se permite reg 1 trabajo por autor
                        return $this->redirect(array('controller'=>'propuestas', 'action' => "aut_add")); 
                } else {
                        $this->Session->setFlash(__('The trabajo could not be saved. Please, try again.'));
                }
        }
        $lineas = $this->Trabajo->Linea->find('list');
        $this->set(compact('lineas'));
    }
    
    
    public function aut_edit() {

        //consultar y si el estudiante ya registrado su trabajo de grado para validar el enlace de menu
        $n = $this->Trabajo->Author->find('count', array('conditions'=>array('Author.estudiante_id'=>  $this->Session->read('est_ses.id'))));
        if($n == 0){
            $this->redirect(array('action'=>'aut_add'));
        }
        
        if ($this->request->is(array('post', 'put'))) {
                if ($this->Trabajo->save($this->request->data)) {
                        $this->Session->setFlash(__('The trabajo has been saved.'));
                        return $this->redirect(array('action' => 'aut_edit'));
                } else {
                        $this->Session->setFlash(__('The trabajo could not be saved. Please, try again.'));
                }
        } else {
                $id = $this->Session->read('tra_ses.id');
                $options = array('conditions' => array('Trabajo.' . $this->Trabajo->primaryKey => $id));
                $this->request->data = $this->Trabajo->find('first', $options);
        }
        $lineas = $this->Trabajo->Linea->find('list');
        $this->set(compact('lineas'));
    }
    
/*
 *  Metodos para perfil de Administrador
 */
    
    public function index() {
            $this->Trabajo->recursive = 0;
            $this->set('trabajos', $this->Paginator->paginate());
    }


    public function view($id = null) {
            if (!$this->Trabajo->exists($id)) {
                    throw new NotFoundException(__('Invalid trabajo'));
            }
            $options = array('conditions' => array('Trabajo.' . $this->Trabajo->primaryKey => $id));
            $this->set('trabajo', $this->Trabajo->find('first', $options));
    }


    public function add() {
            if ($this->request->is('post')) {
                    $this->Trabajo->create();
                    if ($this->Trabajo->save($this->request->data)) {
                            $this->Session->setFlash(__('The trabajo has been saved.'));
                            return $this->redirect(array('action' => 'index'));
                    } else {
                            $this->Session->setFlash(__('The trabajo could not be saved. Please, try again.'));
                    }
            }
            $lineas = $this->Trabajo->Linea->find('list');
            $this->set(compact('lineas'));
    }


    public function edit($id=null) {
            if(! isset($_GET['hash'])){
                    throw new NotFoundException(__('Invalid trabajo'));
            }
            //descifrar id trabajo
            $id = $this->encrypt_decrypt("decrypt", $_GET['hash']);

            if ($this->request->is(array('post', 'put'))) {
                    if ($this->Trabajo->save($this->request->data)) {
                            $this->Session->setFlash(__('The trabajo has been saved.'));
                            return $this->redirect(array('action' => 'index'));
                    } else {
                            $this->Session->setFlash(__('The trabajo could not be saved. Please, try again.'));
                    }
            } else {
                    $options = array('conditions' => array('Trabajo.' . $this->Trabajo->primaryKey => $id));
                    $this->request->data = $this->Trabajo->find('first', $options);
            }
            $lineas = $this->Trabajo->Linea->find('list');
            $this->set(compact('lineas'));
    }


    public function delete($id = null) {
            $this->Trabajo->id = $id;
            if (!$this->Trabajo->exists()) {
                    throw new NotFoundException(__('Invalid trabajo'));
            }
            $this->request->onlyAllow('post', 'delete');
            if ($this->Trabajo->delete()) {
                    $this->Session->setFlash(__('The trabajo has been deleted.'));
            } else {
                    $this->Session->setFlash(__('The trabajo could not be deleted. Please, try again.'));
            }
            return $this->redirect(array('action' => 'index'));
    }
}
