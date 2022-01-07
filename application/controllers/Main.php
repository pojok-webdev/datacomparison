<?php
Class Main extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('client');
    }
    function index(){
        $objs = $this->client->gets();
        $data = array(
            'pagetitle'=>'Perbandingan nama produksi vs impor',
            'tabletitle'=>'Pelanggan',
            'getactive'=>array(
                'name'=>'active',
                'alias'=>''),
            'objs'=>$objs['res']
        );
        $this->load->view('main/tables',$data);
    }
    function alias(){
        $objs = $this->client->gets();
        $data = array(
            'pagetitle'=>'Perbandingan alias produksi vs impor',
            'tabletitle'=>'Pelanggan',
            'getactive'=>array(
                'name'=>'',
                'alias'=>'active',
            ),
            'objs'=>$objs['res']
        );
        $this->load->view('main/alias',$data);
    }
    function info(){
        phpinfo();
    }
}