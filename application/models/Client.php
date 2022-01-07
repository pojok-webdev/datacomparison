<?php
Class Client extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->config('padiconfig');
    }
    function gets(){
        $sql = 'select a.id,a.name,b.id bid,b.nama,a.alias,b.alias balias from clients a ';
        $sql.= 'left outer join '.$this->config->item('dbcompareto').'.client202112 b on b.id=a.id ';
        $sql.= 'where active="1" ';
        $ci = & get_instance();
        $que =  $ci->db->query($sql);
        return array(
            'res'=>$que->result(),
            'cnt'=>$que->num_rows()
        );
    }
}