 <?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersController extends Controller {
    private $usersModel;

    public function __construct()
    {
        parent::__construct();
        $this->call->model('Usersmodel');
        $this->usersModel = $this->Usersmodel;
    }

    public function index(): void
    {
        $this->call->model('Usersmodel');
        $data['users'] = $this->usersModel->all();
        $this->call->view('users/index', $data);
    }

    public function create()
    {
        if ($this->io->method() == 'post') {
            $username = $this->io->post('username');
            $email = $this->io->post('email');
            $data = array(
                'username' => $username,
                'email' => $email
            );

            if ($this->usersModel->insert($data)) {
    header('Location: /index.php/');
    exit;
} else {
    echo "Error inserting record.";
}
        } else {
            $this->call->view('users/create');
        }
    }

    public function update($id)
    {
        $user = $this->usersModel->find($id);
        if (!$user) {
            echo "User not found.";
            return;
        }

        if ($this->io->method() == "post") {
            $username = $this->io->post("username");
            $email = $this->io->post("email");
            $data = array(
                'username' => $username,
                'email' => $email
            );

            if ($this->usersModel->update($id, $data)) {
    header('Location: /index.php/');
    exit;
} else {
                echo "Error updating record.";
            }
        } else {
    $data['user'] = $user; // <-- change 'users' to 'user'
    $this->call->view('users/update', $data);
}
    }

    public function delete($id)
    {
       if ($this->usersModel->delete($id)) {
    header('Location: /index.php/');
    exit;} else {
            echo "Error deleting record.";
        }
    }
}