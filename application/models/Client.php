<?php
Class Client extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function gets(){
        $sql = 'select a.id,a.name,b.id bid,b.nama from clients a ';
        $sql.= 'left outer join tmp.client202112 b on b.id=a.id ';
        $sql.= 'where active="1" ';
        $ci = & get_instance();
        $que =  $ci->db->query($sql);
        return array(
            'res'=>$que->result(),
            'cnt'=>$que->num_rows()
        );
    }
}