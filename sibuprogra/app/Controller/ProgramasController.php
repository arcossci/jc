<?php
App::uses('AppController', 'Controller');
/**
 * Programas Controller
 *
 * @property Programa $Programa
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProgramasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
        
        
        public function beforeFilter() {
            
        }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Programa->recursive = 0;
		$this->set('programas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Programa->exists($id)) {
			throw new NotFoundException(__('Invalid programa'));
		}
		$options = array('conditions' => array('Programa.' . $this->Programa->primaryKey => $id));
		$this->set('programa', $this->Programa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Programa->create();
			if ($this->Programa->save($this->request->data)) {
				$this->Session->setFlash(__('The programa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The programa could not be saved. Please, try again.'));
			}
		}
		$faculties = $this->Programa->Faculty->find('list');
		$propuestas = $this->Programa->Propuesta->find('list');
		$this->set(compact('faculties', 'propuestas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Programa->exists($id)) {
			throw new NotFoundException(__('Invalid programa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Programa->save($this->request->data)) {
				$this->Session->setFlash(__('The programa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The programa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Programa.' . $this->Programa->primaryKey => $id));
			$this->request->data = $this->Programa->find('first', $options);
		}
		$faculties = $this->Programa->Faculty->find('list');
		$propuestas = $this->Programa->Propuesta->find('list');
		$this->set(compact('faculties', 'propuestas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Programa->id = $id;
		if (!$this->Programa->exists()) {
			throw new NotFoundException(__('Invalid programa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Programa->delete()) {
			$this->Session->setFlash(__('The programa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The programa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
