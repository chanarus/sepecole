<?php
/**
 * Created by PhpStorm.
 * User: Pc Technologies
 * Date: 7/5/2016
 * Time: 6:59 PM
 */

class marks extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('marks_model');

        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }


    /**
     * load add marks page
     */
    function index()
    {
        $data['page_title'] = " Student Grading Management";
        $data['user_type'] = $this->session->userdata['user_type'];
        $data['navbar'] = "admin";

        $this->load->view('templates/header', $data);
        $this->load->view('navbar_main', $data);
        $this->load->view('navbar_sub', $data);
        $this->load->view('marks/exam_details', $data);
        $this->load->view('/templates/footer');
    }



}

