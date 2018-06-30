
<?php
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'; 
echo '
<?xml version="1.0" encoding="utf_8" ?>
<rss version="2.0">

<channel>
<title>人民日报全文</title><br>
  <link>http://paper.people.com.cn</link><br>
  <description>人民日报全文by--haijie</description><br>
  
  ';
//echo 'Hello, World!<br>';


function chkurl($url){
    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 10);//设置超时时间
    curl_exec($handle);
    //检查是否404（网页找不到）
    $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
    if($httpCode == 404) {
      return false;
    }else{
        return true;
    }
    curl_close($handle);
}

function http_status_404($url) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_NOBODY, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_exec($ch);
$status = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
return ($status == 404) ? false : true;
}

$g1=date("Y-m")."/".date("d");
$g2=date("Ymd");
for ($x=1; $x<=12; $x++) {
  	for($hh=1;$hh<=12;$hh++)
	{
		if($x<10)$url='http://paper.people.com.cn/rmrb/html/'.$g1.'/nw.D110000renmrb_'.date("Ymd").'_'.$hh.'-0'.$x.'.htm';
		else $url='http://paper.people.com.cn/rmrb/html/'.$g1.'/nw.D110000renmrb_'.date("Ymd").'_'.$hh.'-'.$x.'.htm';
		//echo "第".$x."版 第".$hh."篇：<br>";
		if(http_status_404($url)==true)
		{
			echo '<item>';
			echo '<title>第'.$x.'版 第'.$hh.'篇</title><br>';
			echo "<link>$url</link><br>";
			echo '<description>第'.$x.'版 第'.$hh.'篇</description><br>';
			echo '</item>';
		}
		
		
	}
	
	//echo "数字是：$x <br>";
}
echo '  
</channel>
</rss>';