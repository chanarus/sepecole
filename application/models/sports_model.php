<?php

class Sports_Model extends CI_Model {

    //loading database on class creationorderMainAddress
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
    }
    
    public function add_sport_category($name,$description,$agecat){
        $this->db->query("insert into sport_category(name,description,age_category) values('$name','$description','$agecat')");
        return TRUE;
    }
    
    public function view_sport_category() {
        $data = $this->db->query("select * from sport_category");
        return $data->result();
    }
    
    public function sport_category_details($id) {
        $data = $this->db->query("select * from sport_category where id='$id'");
        return $data->row();
    }

    public function edit_sport_details($id,$name,$des){
        $data = array(
            'name'=> $name,
            'description'=> $des
        );

        $this->db->where("id",$id);
        $this->db->update('sport_category',$date);
        return true;

    }

    public function get_all_sports(){
        $data = $this->db->query("select name from sport_category");
        return $data->result();
    }
}