<?php
//本程序由吴先森开发
//版本:2.2.1
//尊重版权，请不要删除版权提示

//是否开启伪静态
$rewrite = false;

//下载文件存储目录
$path = './file';

//不要问我这里为什么不要用switch或array数组，因为这是我之前写的代码懒得改了

//站点简单设置
function get_info($category)
{
    //网址设定
    if ($category == 'site_url') {
        $Info = '';
        if (empty($Info)) $Info = get_http_type() . $_SERVER['HTTP_HOST'];
    }
    //站点名称
    if ($category == 'site_title') $Info = '未知下载站';
    //站点描述
    if ($category == 'description') $Info = '未知下载站';
    //更多颜色请参考https://www.mdui.org/docs/color
    //主题颜色
    if ($category == 'color') $Info = 'teal';
    //主题强调色
    if ($category == 'accent_color') $Info = 'pink';
    //站点关键词，用','分割
    if ($category == 'keyword') $Info = '未知下载站,吴先森';
    //单个文件下载限速，单位：KB/S
    if ($category == 'download_max_speed') $Info = 100;
    return $Info;
}
