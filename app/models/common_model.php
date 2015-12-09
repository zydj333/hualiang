<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class common_model extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * 
     * @todo 获取系统控制列表
     * 
     * @param $param 父级ID
     * 
     * @return 返回一个对象结果集 
     * 
     */
    public function getSystemList($param = 0) {
        $this->db->where(array('pid' => $param));
        $this->db->order_by('salt', 'desc');
        $query = $this->db->get('db_system');
        return $query->result();
    }
}