<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php if (!empty($page_title)) echo $page_title . " - ";
            echo $siteName; ?></title>
    <meta name="description" content="<? echo $siteDescription?>">
    <meta name="keyword" content="<? echo $siteKeywords?>">
    <link rel="stylesheet" href="<?php echo $mduiPath?>/css/mdui.min.css" />
    <link rel="stylesheet" href="<?php echo $vsCssPath?>" />
    <script src="<?php echo $mduiPath?>/js/mdui.min.js"></script>
</head>

<body class="mdui-appbar-with-toolbar  mdui-theme-primary-<?php echo $themeColor ?> mdui-theme-accent-<?php echo $accentColor ?> mdui-theme-layout-auto">
    <header class="mdui-appbar mdui-appbar-fixed">
        <div class="mdui-toolbar mdui-color-theme">
            <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white"><i class="mdui-icon material-icons">star</i></span>
            <a href="<?php echo $siteURL ?>" class="mdui-typo-headline mdui-hidden-xs">
                <? echo $siteName;?>
            </a>
            <div class="mdui-toolbar-spacer"></div>
            <!-- 尊重版权，请不要删除！ -->
            <a href="https://unknown-o.com" target="_blank" class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-tooltip="{content: '查看作者网页'}"><i class="mdui-icon material-icons">code</i></a>
        </div>
    </header>