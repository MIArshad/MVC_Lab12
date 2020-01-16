<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Users_model');
    $this->load->model('information_model');
  }

  public function index(){
    $data['tableData'] = $this->Users_model->getNames();

    $this->load->view('home', $data);
  }

  public function further_information()
  {
    $data = $this->information_model->getInformation();
    $this->load->view('further_information', $data);
  }
}

?>
