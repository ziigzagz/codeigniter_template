<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
        date_default_timezone_set("Asia/Bangkok");
    }
    public function index()
    {
        $this->load->view('css');
        $this->load->view('js');
        $this->load->view('Login/Login_page.php');
    }
    public function checklogin()
    {
        $ban = $this->User->checkban();
        if (sizeof($ban) == 0) {
            $data = $this->User->checklogin();
            if (sizeof($data)) {
                $this->session->set_tempdata('ID', $data[0]->Emp_ID, 100000);
                $this->session->set_tempdata('components_logged_in', 'TRUE', 100000);
                header("Refresh:0; url=" . base_url());
            } else {
                $this->session->set_tempdata('status_login', 'fail', 3);
                header("Refresh:0; url=" . base_url() . "login");
            }
        } else {
            $this->session->set_tempdata('status_ban', 'yes', 3);
            header("Refresh:0; url=" . base_url() . "login");
        }
    }
    public function isLogin()
    {
        if (isset($_SESSION['ID'])) {
            echo 1;
        } else {
            echo 0;
        }
    }
}
