<?php

echo 'Hello, World!';
$g1=date(y-m/d);
$g2=date(ymd);
for ($x=1; $x<=12; $x++) {
  	for($hh=1;$hh<=8;$hh++)
	{
		echo "第$x版 第$hh篇：<br>";
		if($x<10)echo "http://paper.people.com.cn/rmrb/html/".$g1."/nw.D110000renmrb_".$g2."_".$hh."-0".$x."htm<br>";
		else echo "http://paper.people.com.cn/rmrb/html/".$g1."/nw.D110000renmrb_".$g2."_".$hh."-".$x."htm<br>";
	}
	
	//echo "数字是：$x <br>";
}