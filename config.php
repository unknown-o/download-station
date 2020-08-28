<?php
//本程序由吴先森开发
//版本:2.1.3.202008281749
//尊重版权，请不要删除版权提示

//是否开启伪静态
$rewrite=false;

//下载文件存储目录
$path='./file';

//站点简单设置
function get_info($category){
    //网址设定
    If($category=='site_url') {
        $Info='';
        if(empty($Info)) $Info=get_http_type().$_SERVER['HTTP_HOST'];
    }
    //站点名称
    If($category=='site_title') $Info='未知下载站';
    //站点描述
    If($category=='description') $Info='未知下载站';
    //更多颜色请参考https://www.mdui.org/docs/color
    //主题颜色
    If($category=='color') $Info='teal';
    //主题强调色
    If($category=='accent_color') $Info='pink';
    //站点关键词，用','分割
    If($category=='keyword') $Info='未知下载站,吴先森';
    //单个文件下载限速，单位：KB/S
    If($category=='download_max_speed') $Info=100;
    return $Info; 
}
