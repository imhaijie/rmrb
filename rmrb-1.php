<?php
$g1=date("Y-m")."/".date("d");
$g2=date("Ymd");
$url=$g2.".txt";
//$headers = get_headers($url);
if(file_exists($url)==false)
{
	echo copy("http://rmrb.applinzi.com/helloworld.php","news.htm");
	$myfile = fopen("$g2.txt", "w");
	$txt=15;
	fwrite($myfile, $txt);
	fclose($myfile);
}
	echo readfile("news.htm");