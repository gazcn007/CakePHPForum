<?php
	class TopicsController extends AppController {
		public $components = array('Session');

		public function index(){
			$data = $this->Topic->find('all');
			$this->set('topic', $data);
		}

		public function add(){
			if($this->request->is('post')){
				$this->Topic->create();
				if($this->Topic->save($this->request->data)){
					$this->Session->setFlash('The topic has been created!');
					$this->redirect('index');
				}
			}
		}

		public function view($id){
			$data = $this->Topic->findById($id);
			$this->set('topic', $data);
		}

		public function edit($id){
			// query the data
			$data = $this->Topic->findById($id);

			if($this->request->is(array('post','put'))){
				$this->Topic->id = $id;
				if($this->Topic->save($this->request->data)){
					$this->Session->setFlash('The Topic has been editted!');
					$this->redirect('index');
				}
			}
			$this->request->data = $data;
		}

		public function delete($id){
			$this->Topic->id = $id;
			if($this->request->is(array('post','put'))){
				if($this->Topic->delete()){
					$this->Session->setFlash('The Topic has been deleted!');
					$this->redirect('index');
				}
			}
		}
	}