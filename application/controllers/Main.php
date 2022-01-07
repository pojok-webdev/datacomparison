<?php
Class Main extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('client');
    }
    function index(){
        $objs = $this->client->gets();
        $data = array(
            'pagetitle'=>'Perbandingan produksi vs impor',
            'tabletitle'=>'Pelanggan',
            'getactive'=>array(
                'tables'=>'active',
                'login'=>'',
                'register'=>'',
                'forgotpassword'=>'',
                'form'=>'',
                'form2'=>'','form3'=>''),
            'objs'=>$objs['res']
        );
        $this->load->view('main/tables',$data);
    }
    function info(){
        phpinfo();
    }
}