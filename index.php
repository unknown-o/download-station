<?php
include('config.php');
$f = str_replace("//", "/", $_GET['f']);

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
                if (dirname($f) == '/') $p = '';
                else $p = dirname($f);
                if ($rewrite) echo '<td><a href="' . get_info('site_url') . $p . '">上级目录</a></td>';
                else echo '<td><a href="' . get_info('site_url') . '?f=' . $p . '">上级目录</a></td>';
                echo '<td>Dir</td><td>' . date("Y-m-d H:i:s", filemtime($path . $f)) . '</td>';
                if (is_dir($path . $f)) {
                    $dir = scandir($path . $f);
                    foreach ($dir as $value) {
                        $sub_path = $path . $f . '/' . $value;
                        if ($value == '.' || $value == '..') {
                            continue;
                        } else {
                            echo '<tr>';
                            if (is_dir($sub_path)) {
                                $download_p = '';
                                $size = 'Dir';
                            } else {
                                $download_p = 'download="' . $value . '"';
                                $size = size_unit(filesize($sub_path));
                            }
                            if ($rewrite) echo '<td><a href="' . get_info('site_url') . str_replace("//", "/", $f . '/' . $value) . '" ' . $download_p . '>' . $value . '</a></td>';
                            else echo '<td><a href="' . get_info('site_url') . '?f=' . str_replace("//", "/", $f . '/' . $value) . '" ' . $download_p . '>' . $value . '</a></td>';
                            echo '<td>' . $size . '</td>';
                            echo '<td>' . date("Y-m-d H:i:s", filemtime($sub_path)) . '</td>';
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