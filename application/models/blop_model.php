<?php

class Blop_model extends CI_Model {

    public $tbl;

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all($tbl = null){
        return $this->db->get($tbl)->result();
    }

    public function get_by_id($tbl = null, $id){
        // $query = $this->db->get_where($tbl , array('id' => $id));
        return $this->db->get_where($tbl , array('id' => $id))->result_array();
    }

    //save picture data to db
    function insert($tbl = null, $data){

        $query = $this->db->insert($tbl, $data);
    }

}