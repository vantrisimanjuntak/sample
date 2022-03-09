<?php class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        $data['title'] = 'Login';
        $this->load->view('login_v', $data);
    }
    function verify()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $login_proccess = $this->Main_model->login($username, $password);
        if ($login_proccess->num_rows() > 0) {
            redirect('dashboard');
        } else {
            redirect('login');
        }
    }
}
