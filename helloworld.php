
<?php
echo '
<?xml version="1.0" encoding="GB-2312" ?>
<rss version="2.0">

<channel>
<title>�����ձ�ȫ��</title>
  <link>http://paper.people.com.cn</link>
  <description>�����ձ�ȫ��by--haijie</description>
  <item>
  ';
//echo 'Hello, World!<br>';


function chkurl($url){
    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 10);//���ó�ʱʱ��
    curl_exec($handle);
    //����Ƿ�404����ҳ�Ҳ�����
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
		//echo "��".$x."�� ��".$hh."ƪ��<br>";
		if(chkurl($url)==true)
		{
			echo "<title>��".$x."�� ��".$hh."ƪ</title>";
			echo "<link>$url</link>";
			echo "<description>��$x�� ��$hhƪ:$url</description>"
		}
		
		
	}
	
	//echo "�����ǣ�$x <br>";
}
echo '  </item>
</channel>

</rss>';