<?php
if($downloadMode!=1){
    include("404.php");
    exit();
}
// 将发送到客户端的本地文件 
$localFile = $path . $f;
$downloadFile = pathinfo($f)['basename'];
if (file_exists($localFile) && is_file($localFile)) {
    header('Cache-control: private'); // 发送 headers 
    header('Content-Type: application/octet-stream');
    header('Content-Length: ' . filesize($localFile));
    header('Content-Disposition: filename=' . $downloadFile);
    flush(); // 刷新内容 
    $file = fopen($localFile, "r");
    while (!feof($file)) {
        print fread($file, round($maxSpeed * 1024)); // 发送当前部分文件给浏览者 
        flush(); // flush 内容输出到浏览器端 
        sleep(1); // 终端1秒后继续 
    }
    fclose($file); // 关闭文件流
} else {
    include("404.php");
}
