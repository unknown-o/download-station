<?php include('function.php')?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title><?php if(!empty($page_title)) echo $page_title." - "; echo get_info('site_title');?></title>
  <meta name="description" content="<? echo get_info('description');?>">
  <meta name="keyword" content="<? echo get_info('keyword');?>">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/mdui@1.0.0/dist/css/mdui.min.css"/>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.1.1/build/styles/vs.min.css"/>
</head>
<body class="mdui-appbar-with-toolbar  mdui-theme-primary-<?php echo get_info('color'); ?> mdui-theme-accent-<?php echo get_info('accent_color'); ?> mdui-theme-layout-auto">
<header class="mdui-appbar mdui-appbar-fixed">
  <div class="mdui-toolbar mdui-color-theme">
    <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white"><i class="mdui-icon material-icons">star</i></span>
    <a href="<?php echo get_info('site_url');?>" class="mdui-typo-headline mdui-hidden-xs"><? echo get_info('site_title');?></a>
    <div class="mdui-toolbar-spacer"></div>
    <!-- 尊重版权，请不要删除！ -->
    <a href="https://unknown-o.com" target="_blank" class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-tooltip="{content: '查看作者网页'}"><i class="mdui-icon material-icons">code</i></a>
  </div>
</header>