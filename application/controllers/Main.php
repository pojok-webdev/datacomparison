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
                'alias'=>'','download'=>'','hunter'=>''),
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
                'download'=>'','hunter'=>''
            ),
            'objs'=>$objs['res']
        );
        $this->load->view('main/alias',$data);
    }
    function hunter(){
        $objs = $this->client->getams();
        $data = array(
            'pagetitle'=>'Perbandingan user_id vs hunter',
            'tabletitle'=>'Pelanggan',
            'getactive'=>array(
                'name'=>'',
                'alias'=>'',
                'download'=>'',
                'hunter'=>'active'
            ),
            'objs'=>$objs['res']
        );
        $this->load->view('main/hunter',$data);
    }
    function download(){
        $objs = $this->client->gets();
        $data = array(
            'pagetitle'=>'Download',
            'tabletitle'=>'Pelanggan',
            'getactive'=>array(
                'name'=>'',
                'alias'=>'',
                'download'=>'active','hunter'=>''
            ),
            'objs'=>$objs['res'],
            'subject'=>'Pelanggan',
            'filename'=>'pelanggan'
        );
        $this->load->view('main/download',$data);
    }
    function info(){
        phpinfo();
    }
}