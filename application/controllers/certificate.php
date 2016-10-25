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

/*
*Index function
*Load the main view
*/
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

  /*
  *Load leaving certificate view
  */
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

  /*
  *Load character certificate view
  */
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

  /*
  *Search a student
  */
  function search_students() {
    $std_id = $this->input->post('student_id');
    $std_name = $this->input->post('std_name');

    $data['name'] = $this->Student_Model->get_student_only($std_id);
    var_dump($data['name']);
  }
}
