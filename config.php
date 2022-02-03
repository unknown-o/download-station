<?php
// 本程序由吴先森开发
// 尊重版权，请不要删除版权提示

// 是否开启伪静态（开启为true，关闭为false
$rewrite = false;

// 下载文件存储目录（如果下载模式为1时建议修改
$path = './file';

// 网址设定，为空为自动获取（eg. https://share.llilii.cn
$siteURL = '';

// 网站名称
$siteName = '未知下载站';

// 网站介绍
$siteDescription = "由一条咸鱼开发的简易（陋）下载站";

// 站点关键词
$siteKeywords = '未知下载站,吴先森';

// MDUI框架地址（支持外部CDN地址
$mduiPath = "/static/mdui";

// vs.min.css文件地址（支持外部CDN地址
$vsCssPath = "/static/css/vs.min.css";

// 主题颜色和强调色颜色，更多颜色请参考https://www.mdui.org/docs/color
$themeColor = 'teal';
$accentColor = 'pink';

// 下载模式
// 此值为1时：使用php进行下载限速（$maxSpeed变量生效
// 此值为2时：直接返回文件在本站的路径
// 此值为3时：将文件的路径拼接到$downloadURL中（$downloadURL变量生效
$downloadMode = 1;

// 单个文件下载限速，单位：KB/S（下载模式为1时生效
$maxSpeed = 100;

// 文件服务器链接（下载模式为3时生效
$downloadURL = "https://share.llilii.cn";