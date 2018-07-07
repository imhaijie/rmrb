<?php
require_once __DIR__ . '/aliyun-oss-php-sdk/samples/Common.php';

use OSS\OssClient;
use OSS\Core\OssException;

$bucket = Common::getBucketName();
$ossClient = Common::getOssClient();
if (is_null($ossClient)) exit(1);





$g1=date("Y-m")."/".date("d");
$g2=date("Ymd");
$url="https://pipetry.oss-cn-hangzhou.aliyuncs.com/".$g2.".htm";
$headers = get_headers($url);
if(strpos($headers[0], '404')==true)
{
	//$ossClient->uploadFile($bucket, "c.file", __FILE__);
	$object="http://rmrb.applinzi.com/helloworld.php";
	$filePath=$g2.".htm";
	$content = file_get_contents($object);
	$ossClient->putObject($bucket, $filePath, $content);
	//$ossClient->uploadFile($bucket, $filePath,$object);
	//$ossClient->uploadFile($bucket, $object, $filePath);
	//$txt=readfile("http://rmrb.applinzi.com/helloworld.php");
	
	
	
	//$ossClient->putObject($bucket, $filePath, $txt);
	/**
	echo copy("http://rmrb.applinzi.com/helloworld.php","news.htm");
	$myfile = fopen("$g2.txt", "w");
	$txt=15;
	fwrite($myfile, $txt);
	fclose($myfile);
	**/
}
	echo readfile($url);