<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class admin extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    
    public function index(){
        redirect('/admin_index/index');
    }
}
