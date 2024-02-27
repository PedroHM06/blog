<?php 

class PostsController extends AppController{

    
    
    public function index(){
        $this->layout = 'ajax';
        $this->set('posts', $posts =$this->Post->find('all'));
    }

    public function view($id = null){
        $this->layout = 'ajax';
        $post = $this->Post->findById($id);
        $this->set("post" , $post);
    }


    public function add(){
        $this->layout = 'ajax';
    }

    public function edit($id = null) {
        $this->layout = 'ajax';
        $this->set('post', $this->Post->findById($id));  
    }

    public function delete($id =null){
        $this->set('post', $this->Post->findByid($id));
        if($this->Post->delete($id)){
            $this->Flash->success('Produto deletado com sucesso.');
            $this->redirect('index');
        }
    }
    public function save($id = null){
        if($id){
            $this->Post->id = $id;
            $this->Post->set($this->request->data);
            $this->Post->save($this->request->data);
        }else{
            print_r($this->Post->create($this->request->data));
        }
        exit;
    }
}

?>