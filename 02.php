
<?php
echo '<html>
<head>
<meta charset="GB-2312">
<title>人民日报要闻2</title>
</head>

<body>';
echo 'Hello, World!<br>';
$g1=date("y-m")."/".date(d);
$g2=date(ymd);
for ($x=4; $x<=6; $x++) {
  	for($hh=1;$hh<=11;$hh++)
	{
		echo "第".$x."版 第".$hh."篇：<br>";
		if($x<10)echo '<a href="http://paper.people.com.cn/rmrb/html/20'.$g1.'/nw.D110000renmrb_20'.date(ymd)."_".$hh."-0".$x.'.htm" target="_blank">';
		
		else echo '<a href="http://paper.people.com.cn/rmrb/html/20'.$g1.'/nw.D110000renmrb_20'.date(ymd)."_".$hh."-".$x.'.htm" target="_blank">';
		
		echo "第".$x."版 第".$hh."篇：</a><br>";
	}
	
	//echo "数字是：$x <br>";
}
echo '</body>
</html>';