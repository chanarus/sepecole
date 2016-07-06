<?php
/**
 * Ecole - Certificate Controller
 *
 * Handles Functionality of the Certificate compodent(manage certificate)
 *
 * @author  Sampath R.P.C.
 */

class Certificate extends CI_Controller {
  /**
   * Class contructor
   */
  function __construct() {
    parent::__construct();
    $this->load->model('Student_Model');
    $this->load->model('user');

    if ($this->session->userdata('user_type') !== "A") {
        redirect('login');
    }
  }

  function index() {
      $data['user_type'] = $this->session->userdata['user_type'];
      $data['page_title'] = "Certificate";
      $data['navbar'] = "admin";



      $this->load->view('templates/header', $data);
      $this->load->view('navbar_main', $data);
      $this->load->view('navbar_sub', $data);
      $this->load->view('certificate/index', $data);
      $this->load->view('templates/footer');
  }

  function create_leaving_certificate() {
    $data['user_type'] = $this->session->userdata['user_type'];
    $data['page_title'] = "Certificate";
    $data['navbar'] = "admin";

    $this->load->view('templates/header', $data);
    $this->load->view('navbar_main', $data);
    $this->load->view('navbar_sub', $data);
    $this->load->view('certificate/leaving_certificate', $data);
    $this->load->view('templates/footer');
  }

  function create_character_certificate() {
    $data['user_type'] = $this->session->userdata['user_type'];
    $data['page_title'] = "Certificate";
    $data['navbar'] = "admin";

    $this->load->view('templates/header', $data);
    $this->load->view('navbar_main', $data);
    $this->load->view('navbar_sub', $data);
    $this->load->view('certificate/character_certificate', $data);
    $this->load->view('templates/footer');
  }

  function genarate_leaving_certificate() {
    $this->load->view('development');
  }

  function genarate_character_certificate() {
    $this->load->view('development');
  }
}
