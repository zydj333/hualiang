<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class home_message_model extends CI_Model {
    
    //put your code here
    public function __construct() {
        parent::__construct();
    }

    /**
     * 
     * todo  获取资讯总条数
     * 
     * param $search 查询条件
     * 
     * return 返回一个int类型的整数
     * 
     */
    public function getNewCount($search) {
        $where = '';
        if (isset($search['title'])) {
            $where.=" and title like '%" . $search['title'] . "%'";
        }
        if (isset($search['search_name'])) {
            $where.=" and search_name= '" . $search['search_name'] . "'";
        }
        if (isset($search['ac_id'])) {
            $where.=" and ac_id= " . $search['ac_id'];
        }
        $sql = "select ac_id from db_article where sts = 0" . $where;
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    
    /**
     *
     * todo 获取数据列表
     *
     * param $search 查询条件
     *
     * return 返回一个结果集
     *
     */
    public function getMessageList($search) {
        $where = '';
        if (isset($search['title'])) {
            $where.=" and a.title like '%" . $search['title'] . "%'";
        }
        if (isset($search['search_name'])) {
            $where.=" and a.search_name= '" . $search['search_name'] . "'";
        }
        if (isset($search['ac_id'])) {
            $where.=" and a.ac_id= " . $search['ac_id'];
        }
        $sql = "select a.*,b.name as typename from db_article as a left join db_article_category as b on a.ac_id=b.ac_id where a.sts = 0 " . $where . " order by a.id desc limit " . $search['start'] . ',' . $search['pagesize'];
        $query = $this->db->query($sql);
        return $query->result();
    }

    /**
     *
     * 根据ID获取文章详情
     *
     * $id 要获取的数据ID
     *
     * 返回一个结果集
     *
     */
    public function getMessageInfo($id) {
        $this->db->where(array('id' => $id));
        $query = $this->db->get('db_article');
        return $query->row();
    }
}