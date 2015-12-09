<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class index extends CI_Controller {

    private $now_time = 0;
    private $pagesize = 10;

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('home_message_model');
        $this->load->library('pagenation');
    }

    public function index() {
//        include_once('./simple_html_dom.php');
//        $a = file_get_html('http://www.cnaidai.com/invest.html')->plaintext;
//        if (!empty($a)) {
//            $b = explode(" ", trim($a));
//            unset($b[array_search(" ", $b)]);
//            $qian = array(" ", "　", "\t", "\n", "\r", "4.5%", "0.3%", "1.05%", "9%", "3%");
//            $hou = array("", "", "", "", "");
//            $c = str_replace($qian, $hou, $b);
//            $d = array_filter($c);
//            $e = array_merge($d);
//            $place = array_keys($e, "每日发标时间：上午9:00、中午12:00、晚上19:00", false);
//            $info['data'] = array_splice($e, $place[0]);
//        } else {
            $info['data'] = array('每日发标时间：上午9:00、中午12:00、晚上19:00','车抵贷-CDD03151021018','还款方式：到期还本付息','1','2','310,000','1','1','16.8','%','1','3','1','1','企业贷-QYD12151021013',
                '还款方式：每月还息到期还本','1','2','100,000','1','1','16.8','%','1','12','1','1','融租贷-RZD18151021010','还款方式：每月还息到期还本','1','2','200,000','1','1','18','%','1','18','1','1',);
//        }
        //var_dump($info);die;
        $this->load->view('home/index', $info);
    }

    /**
     * 
     * 
     * @todo 载入异步分页 
     * 
     */
    public function ajaxList() {
        $msg = array(
            'flag' => 0,
            'error' => "",
        );
        $nowpage = $this->input->post('nowpage') ? $this->input->post('nowpage') : 1;
        $title = $this->input->post('title');
        $search_name = $this->input->post('search_name');
        $ac_id = $this->input->post('ac_id');
        $search = array(
            'start' => ($nowpage - 1) * $this->pagesize,
            'pagesize' => $this->pagesize
        );
        if ($title != '') {
            $search['title'] = $title;
        }
        if ($ac_id > -1) {
            $search['ac_id'] = $ac_id;
        }
        if ($search_name != '') {
            $search['search_name'] = $search_name;
        }
        $count = $this->home_message_model->getNewCount($search);
        $page_url = $this->pagenation->getPage($count, $this->pagesize, $nowpage);
        $list = $this->home_message_model->getMessageList($search);
        if (!empty($list)) {
            $msg['flag'] = 1;
            $msg['error'] = $list;
            $msg['pageurl'] = $page_url;
        } else {
            $msg['flag'] = 0;
            $msg['error'] = '没有相应数据';
            $msg['pageurl'] = '';
        }
        echo json_encode($msg);
    }

    /**
     * 
     * @todo 载入资讯列表 
     * 
     */
    public function mlist() {
        $search = array(
            'start' => 0,
            'pagesize' => $this->pagesize
        );
        $nowpage = $this->input->get('page') ? htmlentities($this->input->get('page')) : 1;
        $count = $this->home_message_model->getNewCount($search);
        $new = $this->home_message_model->getMessageList($search);
        $data['url'] = $this->pagenation->getPage($count, $this->pagesize, 1);
        $data['info'] = $new;
        //var_dump($data);die;
        $this->load->view('home/public', $data);
        $this->load->view('home/list');
    }

    /**
     * 
     * @todo 载入资讯详情页面 
     * 
     */
    public function message() {
        $id = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
        if ($id > 0) {
            $new = $this->home_message_model->getMessageInfo($id);
            if (!empty($new)) {
                $data['new'] = $new;
                $this->load->view('home/public', $data);
                $this->load->view('home/message');
            } else {
                $this->common->redirect('3', '/index/index', '获取资讯失败！');
            }
        } else {
            $this->common->redirect('3', '/index/index', '获取ID失败！');
        }
    }

}
