<?php
include('config.php');
include('function.php');

$f = str_replace("//", "/", $_GET['f']);

if (empty($siteURL)) {
    $siteURL = getHttpType() . $_SERVER['HTTP_HOST'];
}
if (!is_dir($path . $f)) {
    if (file_exists($path . $f)) {
        include('download.php');
        exit;
    } else {
        include('404.php');
        exit;
    }
}

if (empty($f)) $page_title = 'Index of /';
else  $page_title = 'Index of ' . $f;
include('header.php');
?>
<div class="mdui-container doc-container">
    <div class="mdui-typo">
        <h2 class="doc-chapter-title doc-chapter-title-first mdui-text-color-theme"><?php echo $page_title ?><a class="doc-anchor" id="font"></a></h2>
    </div>
</div>
<br>
<div class="mdui-container">
    <div class="mdui-typo mdui-table-fluid">
        <table class="mdui-table mdui-table-hoverable">
            <thead>
                <tr>
                    <th>文件名</th>
                    <th>文件大小</th>
                    <th>修改日期</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (dirname($f) == '/') {
                    $p = '';
                } else {
                    $p = str_replace("\\", "/", dirname($f));
                }
                if ($rewrite) {
                    echo '<td><a href="' . $siteURL . $p . '">上级目录</a></td>';
                } else {
                    echo '<td><a href="' . $siteURL . '?f=' . $p . '">上级目录</a></td>';
                }
                echo '<td>Dir</td><td>' . date("Y-m-d H:i:s", filemtime($path . $f)) . '</td>';
                if (is_dir($path . $f)) {
                    $dir = scandir($path . $f);
                    foreach ($dir as $filename) {
                        $subPath = $path . $f . '/' . $filename;
                        if ($filename == '.' || $filename == '..') {
                            continue;
                        } else {
                            echo '<tr>';
                            if ($rewrite) {
                                $fileURL = $siteURL . str_replace("//", "/", $f . '/' . $filename);
                            } else {
                                $fileURL = $siteURL . str_replace("//", "/", "?f=" . $f . '/' . $filename);
                            }
                            if (is_dir($subPath)) {
                                $extraFlag = '';
                                $filesize = 'Dir';
                            } else {
                                switch ($downloadMode) {
                                    case 2:
                                        $fileURL = $siteURL . str_replace("//", "/", $subPath);
                                        break;
                                    case 3:
                                        $fileURL = $downloadURL . str_replace("//", "/", $f . '/' . $filename);
                                        break;
                                }
                                $extraFlag = 'download="' . $filename . '"';
                                $filesize = sizeConvert(filesize($subPath));
                            }
                            echo '<td><a href="' .  $fileURL . '" ' . $extraFlag . '>' . $filename . '</a></td>';
                            echo '<td>' . $filesize . '</td>';
                            echo '<td>' . date("Y-m-d H:i:s", filemtime($subPath)) . '</td>';
                            echo '</tr>';
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <br>
</div>
</body>

</html>