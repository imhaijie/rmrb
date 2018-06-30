
<?php
echo "<meta charset="utf-8">"
echo 'Hello, World!<br>';
$g1=date("y-m")."/".date(d);
$g2=date(ymd);
for ($x=1; $x<=12; $x++) {
  	for($hh=1;$hh<=8;$hh++)
	{
		echo "第".$x."版 第".$hh."篇：<br>";
		if($x<10)echo "http://paper.people.com.cn/rmrb/html/20".$g1."/nw.D110000renmrb_20".date(ymd)."_".$hh."-0".$x.".htm<br>";
		else echo "http://paper.people.com.cn/rmrb/html/20".$g1."/nw.D110000renmrb_20".date(ymd)."_".$hh."-".$x.".htm<br>";
	}
	
	//echo "数字是：$x <br>";
}