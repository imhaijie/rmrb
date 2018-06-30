
<?php
echo '
<?xml version="1.0" encoding="unicode" ?>
<rss version="2.0">

<channel>
<title>人民日报全文</title>
  <link>http://paper.people.com.cn</link>
  <description>人民日报全文by--haijie</description>
  <item>
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

$g1=date("y-m")."/".date(d);
$g2=date(ymd);
for ($x=1; $x<=12; $x++) {
  	for($hh=1;$hh<=11;$hh++)
	{
		if($x<10)$url="http://paper.people.com.cn/rmrb/html/20".$g1."/nw.D110000renmrb_20".date(ymd)."_".$hh."-0".$x.".htm";
		else $url="http://paper.people.com.cn/rmrb/html/20".$g1."/nw.D110000renmrb_20".date(ymd)."_".$hh."-".$x.".htm";
		//echo "第".$x."版 第".$hh."篇：<br>";
		if(chkurl($url)==true)
		{
			echo "<title>第".$x."版 第".$hh."篇</title>";
			echo "<link>$url</link>";
			echo "<description>第$x版 第$hh篇:$url</description>";
		}
		
		
	}
	
	//echo "数字是：$x <br>";
}
echo '  </item>
</channel>

</rss>';