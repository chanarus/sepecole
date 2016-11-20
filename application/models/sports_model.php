<?php

class Sports_Model extends CI_Model {

    //loading database on class creationorderMainAddress
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
    }

    public function add_sport_category($name,$description,$agecat){
        $this->db->query("INSERT INTO sport_category(name,description,age_category) VALUES('$name','$description','$agecat')");
        return TRUE;
    }

    public function add_sport_captains($name,$category,$divition,$captain,$vice){
        $this->db->query("INSERT INTO sport_captains(name,category,divition,captain,vice) VALUES('$name','$category','$divition','$captain','$vice')");
        return TRUE;
    }

    public function view_sport_category() {
        $data = $this->db->query("SELECT * FROM sport_category");
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
        $data = $this->db->query("SELECT name FROM sport_category");
        return $data->result();
    }

    public function get_all_teachers(){
        $data = $this->db->query("SELECT full_name FROM teachers");
        return $data->result();
    }


    public function captain_name($id){

        try {
            if($data = $this->db->query("SELECT full_name FROM students WHERE admission_no ='$id'")){
                $row = $data->row()->full_name;
                return $row;
            } else {
                return null;
            }
        } catch (Exception $ex) {
            return null;
        }
    }

    public function get_cap_regno($name){
        $data = $this->db->query("SELECT admission_no FROM students WHERE	full_name LIKE '%$name%' LIMIT 1;");
        //var_dump($data);
        return $data->result();
    }
}
?>
