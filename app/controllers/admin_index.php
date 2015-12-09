<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class admin_index extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_index_model');
        $this->load->model('admin_system_model');
    }

    /**
     * 
     * @todo 载入首页 
     * 
     */
    public function index() {
        $data['mysql'] = $this->admin_index_model->getMysql();
        $this->loadHeader($data);
        $this->load->view('admin/index/index');
    }
}
