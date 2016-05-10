<?php
/**
 * php添加文件到压缩包
 * User: admi
 * Date: 2016/5/9
 * Time: 12:02
 */

$zip = new ZipArchive();
$filename = "./test.zip";
$thisDir = '.';

if ($zip->open($filename, ZIPARCHIVE::CREATE) !== TRUE) {
    exit("cannot open <$filename>\n");
}

$zip->addFromString("testfilephp.txt", "#1 This is a test string added as testfilephp.txt.\n");
$zip->addFromString("testfilephp2.txt", "#2 This is a test string added as testfilephp2.txt.\n");
$zip->addFile($thisDir . "/1.png", "1.png");
$zip->addFile($thisDir . "/a.txt", "a.txt");
echo "numfiles: " . $zip->numFiles . "\n";
echo "status:" . $zip->status . "\n";
$zip->close();