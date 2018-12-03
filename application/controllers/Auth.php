<?php
Class Auth extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_login');
    }
    public function index()
    {
        if (isset($_POST['submit'])) {
          $username=$this->input->post('username');
          $password=md5($this->input->post('password'));
          $login = $this->Model_login->chek_login($username,$password);
         if (empty($login)) {
               redirect('Auth');
           } else {
            $this->session->set_userdata($login);
            $this->session->set_userdata(array('status_login' => 'ok'));
            redirect('Dashboard');
           }
      }else{
           $this->load->view('login');
    }
  }

  function logout() {
    $this->session->sess_destroy();
    redirect('Auth');
   }
}

?>