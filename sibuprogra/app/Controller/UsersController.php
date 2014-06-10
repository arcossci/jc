<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

    
    public $components = array('Paginator', 'Session');


    public function beforeFilter() {
        parent::beforeFilter();
        //determinar cual es la accion que se esta llamando
        if(in_array($this->action, array('aut_add','email_verify'))){
            $this->layout="default-back";              
        } else if(in_array($this->action, array("login"))){
            $this->layout="layout_login";              
        }        

        //permitir funcion de registro de usuario
        $this->Auth->allow('aut_add', 'email_verify');

    }

    //inicio de sesion
    public function login() {
        if ($this->request->is('post')) {
            if($this->User->find("count", array("conditions" => array("and" => array(
                "email" => $this->data["User"]["email"],
                "password" => $this->data["User"]["password"])))) == 1){
                //si inicia sesion correctamente
                if ($this->Auth->login($this->data)) {
                    //obtener usuario que inicia sesion
                    $u = $this->User->find('first', array('conditions'=> array('email' => $this->data['User']['email'])));
                    //registrar datos del usuario en sesion
                    $this->Session->write('usu_ses.id', $u['User']['id']);
                    $this->Session->write('est_ses.id', $u['Estudiante']['id']);
                    
                    //verificar rol de usuario para cargar interfaz correspondiente
                    switch ($u['Grupo']['nombre']) {
                        
                        case 'Administrador':
                             break;

                        case 'Autor':
                                //consultar y si el estudiante ya registrado su trabajo de grado
                                $n = $this->User->Estudiante->Author->find('count', array('conditions'=>array('Author.estudiante_id'=>$u['Estudiante']['id'])));
                                if($n > 0){
                                    //como es autor entonces debo registrar el id del trabajo del autor en sesion
                                    $e = $this->User->Estudiante->Author->find('first', array('conditions'=>array('Author.estudiante_id'=>$u['Estudiante']['id'])));
                                    $this->Session->write('tra_ses.id',$e['Author']['trabajo_id']);
                                    return $this->redirect(array('controller'=>'trabajos', 'action'=>"aut_edit"));
                                }else {
                                    //como no es autor entonces debe registrar su trabajo
                                    return $this->redirect(array('controller'=>'trabajos', 'action'=>"aut_add"));
                                }
                             break;

                        case 'Estudiante':
                                return $this->redirect(array('controller'=>'trabajos', 'action'=>"index"));
                             break;
                    }
                }
            }else {
                    $this->Session->setFlash(__('Username or password is incorrect'));
            }
        }
    }


    //fin de sesion
    public function logout(){
        $this->Session->destroy();
        $this->redirect($this->Auth->logout());
    }

    
    public function index() {
            $this->User->recursive = 0;
            $this->set('users', $this->Paginator->paginate());
    }

    
    public function view($id = null) {
            if (!$this->User->exists($id)) {
                    throw new NotFoundException(__('Invalid user'));
            }
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->set('user', $this->User->find('first', $options));
    }

    
    public function add() {
            if ($this->request->is('post')) {
                    $this->User->create();
                    if ($this->User->save($this->request->data)) {
                            $this->Session->setFlash(__('The user has been saved.'));
                            return $this->redirect(array('action' => 'index'));
                    } else {
                            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
                    }
            }
            $estudiantes = $this->User->Estudiante->find('list');
            $grupos = $this->User->Grupo->find('list');
            $this->set(compact('estudiantes', 'grupos'));
    }

  
    public function aut_add() {
            if ($this->request->is('post')) {
                    $this->User->create();
                    if ($this->User->save($this->request->data)) {
                            $this->Session->setFlash(__('The user has been saved.'));
                            //avanzar al registro del trabajo de grado
                            //cifrar id estudiante
                            $id = $this->encrypt_decrypt("encrypt", $this->data['User']['estudiante_id']);
                            return $this->redirect(array('action' => "email_verify?hash={$id}"));
                    } else {
                            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
                    }
            }
            //seleccionar estudiante previamente registrado mediante su id
            //seleccionar grupo al que pertenece el usuario mendiante su rol (hash2)
            if(isset($_GET['hash']) && isset($_GET['hash2'])){
                $est_id = $this->encrypt_decrypt("decrypt", $_GET['hash']);
                $est_rol = $this->encrypt_decrypt("decrypt", $_GET['hash2']);
                $estudiantes = $this->User->Estudiante->find('list', array('conditions' => array('id'=> $est_id)));
                $grupos = $this->User->Grupo->find('list', array('conditions' => array('nombre Like'=> "%{$est_rol}%")));
            }	
            $this->set(compact('estudiantes', 'grupos'));
    }

    
    // notificacion de verificacion cuenta email
    public function email_verify() {
        if(isset($_GET['hash'])){               
            //necesito enviar via email la informacion del usuario
            $est = $this->encrypt_decrypt('decrypt', $_GET['hash']);
            $this->Session->write('email.est_id', $est);
        }
    }

    
    public function edit($id = null) {
            if (!$this->User->exists($id)) {
                    throw new NotFoundException(__('Invalid user'));
            }
            if ($this->request->is(array('post', 'put'))) {
                    if ($this->User->save($this->request->data)) {
                            $this->Session->setFlash(__('The user has been saved.'));
                            return $this->redirect(array('action' => 'index'));
                    } else {
                            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
                    }
            } else {
                    $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
                    $this->request->data = $this->User->find('first', $options);
            }
            $estudiantes = $this->User->Estudiante->find('list');
            $grupos = $this->User->Grupo->find('list');
            $this->set(compact('estudiantes', 'grupos'));
    }

    
    public function delete($id = null) {
            $this->User->id = $id;
            if (!$this->User->exists()) {
                    throw new NotFoundException(__('Invalid user'));
            }
            $this->request->onlyAllow('post', 'delete');
            if ($this->User->delete()) {
                    $this->Session->setFlash(__('The user has been deleted.'));
            } else {
                    $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
            }
            return $this->redirect(array('action' => 'index'));

    }   
        
}
