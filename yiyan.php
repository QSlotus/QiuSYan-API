<?php
$filename = 'data/yiyan-data.dat';        

header('Content-type: text/html; charset=utf-8');

$absPath = realpath($filename);

if (!$absPath || !file_exists($absPath)) {
    die($filename . ' 数据文件不存在');
}

$data = file($absPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$result = $data[array_rand($data)];
$result = trim($result);

echo 'document.write("'.htmlspecialchars($result).'");';
?>
