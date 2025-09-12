<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index(): void
    {
        $this->call->model('UsersModel');
        $data['users'] = $this->UsersModel->all();
        $this->call->view('/', $data);
    }

    public function create()
    {
       if ($this->io->method() == 'post') {
        
        $username =$this->io->post('username');
        $email =$this->io->post('email');
        $data = array(
            'username' => $username,
            'email' => $email
        );
        if($this->UsersModel->insert($data)){
            header('Location: /');
            exit;
        }else {
            echo "Error inserting record.";
        }
       }else{
        $this->call->view('users/create');
       }
    }

    public function update($id)
    {
        $user = $this->UsersModel->find($id);
        if(!$user){
            echo "User not found.";
            return;
        }
        if($this->io->method() == "post"){
            $username =$this->io->post("username");
            $email =$this->io->post("email");
            $data = array(
                'username' => $username,
                'email' => $email
            );
            if($this->UsersModel->update($id, $data)){
                header('Location: /');
exit;
            }else{
                echo "Error updating record.";
            }
        }else{
            $data['user'] = $user;
            $this->call->view('users/update', $data);
        }
    }
    function delete($id){
        if($this->UsersModel->delete($id)){
            header('Location: /');
exit;
        }else{
            echo "Error deleting record.";
        }
    }
}