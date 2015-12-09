<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class pagenation {

    /**
     *
     * @param 分页参数
     *
     * @ignore $totle_count 总条数
     *
     * @ignore $per_count  每页显示的条数
     *
     * @ignore $now_page  当前第几页
     *
     *
     */
    function getPage($totle_count, $page_size, $now_page) {
        $totle_page = ceil(intval($totle_count) / intval($page_size));
        $pre_page = intval($now_page) - 1;
        $next_page = intval($now_page) + 1;
        $html = "<div style='font-size: 14px;' id='pageurl' class='message' >共<i class='blue'>" . $totle_count . "</i>条数据 分为<i class='blue'>" . $totle_page . "</i>页  每页显示<i class='blue'>" . $page_size . "</i>条 当前第<i class='blue'>" . $now_page . "</i>页</div>";
        $html.=' <ul style="font-size: 14px; class="paginList">';
        if ($now_page != 1) {//是否显示首页
            $html.="<a style='padding-right:8px' href='#' onclick='return getPageUrl(1);return false' >首页</a>";
        }
        if ($now_page > 1) {//是否显示上一页
            $html.="<a style='padding-right:8px' href='#' onclick='return getPageUrl(" . $pre_page . ");return false' ><span class='pagepre'></span></a>";
        }
        /* 中间数字循环链接开始 */
        if ($totle_page <= 4) {//当总页数小于等于4时
            for ($i = 1; $i <= $totle_page; $i++) {
                if ($now_page == $i) {
                    $html.="<a style='padding-right:8px' href='#'>" . $i . "</a>";
                } else {
                    $html.="<a style='padding-right:8px' href='#' onclick='return getPageUrl(" . $i . ");return false'>" . $i . "</a>";
                }
            }
        }
        if ($totle_page >= 5) {//当总页数大于等于5时
            if ($now_page < 3) {//当 当前页为小于3时，及等于1或者等于2
                for ($i = 1; $i <= 5; $i++) {
                    if ($now_page == $i) {
                        $html.="<a style='padding-right:8px' href='#'>" . $i . "</a>";
                    } else {
                        $html.="<a style='padding-right:8px' href='#' onclick='return getPageUrl(" . $i . ");return false'>" . $i . "</a>";
                    }
                }
            } else if ($now_page >= 3 && $now_page <= intval($totle_page) - 2) {//当 当前页大于3且小于总页数减2时
                for ($i = intval($now_page) - 2; $i <= intval($now_page) + 2; $i++) {
                    if ($now_page == $i) {
                        $html.="<a style='padding-right:8px' href='#'>" . $i . "</a> ";
                    } else {
                        $html.="<a style='padding-right:8px' href='#' onclick='return getPageUrl(" . $i . ");return false' >" . $i . "</a>";
                    }
                }
            } else {
                for ($i = intval($totle_page) - 4; $i <= $totle_page; $i++) {
                    if ($now_page == $i) {
                        $html.="<a style='padding-right:8px' href='#'>" . $i . "</a>";
                    } else {
                        $html.="<a style='padding-right:8px' href='#' onclick='return getPageUrl(" . $i . ");return false'>" . $i . "</a>";
                    }
                }
            }
        }

        /* 中间数字循环连接结束 */
        if ($now_page < $totle_page) {//是否显示下一页
            $html.="<a style='padding-right:8px' href='#' onclick='return getPageUrl(" . $next_page . ");return false'><span class='pagenxt'></span></a>";
        }
        if ($totle_page != $now_page) {//是否显示尾页
            $html.="<a style='padding-right:8px' href='#' onclick='return getPageUrl(" . $totle_page . ");return false'>末页</a>";
        }
        $html.="</ul></div>";
        return $html;
    }
}
