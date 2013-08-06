<?php
$im = imagecreatetruecolor(80,23);//创建画布
$bgcolor = imagecolorallocate($im,220,230,230);//调制背景色
$tcolor = imagecolorallocate($im,255,0,0);
$bordercolor = imagecolorallocate($im,0,0,255);//调制边框颜色
$green = imagecolorallocate($im,0,255,0);//调制边框颜色

imagefill($im,10,10,$bgcolor);//填充背景色
imagerectangle($im,1,1,79,22,$bordercolor);//绘制边框
$num = rand(65,90);
for($i = 0;$i<4;$i++)
{
	
$num_case = rand(0,2);//默认从0开始，产生随机数0-2，根据数值的不同决定产生的是数字|小写|大写
switch($num_case)
{
	case 0:$num = rand(48,57);break;//数字
	case 1:$num = rand(65,90);break;//大写
	default:$num = rand(97,122);//小写
	
	}

$text[$i] = sprintf("%c",$num);//将随机产生的ASCII码转换为相应的字符
imagettftext($im,rand(10,20),rand(0,30),17*$i+10,20,$tcolor,"simkai.ttf",$text[$i]);
}


for($i=0;$i<100;$i++)
{
imagesetpixel($im,rand(1,79),rand(1,22),$green);
}

session_start();

$_SESSION["ckcode"]=implode($text);//把text转换成字符

header("Content-type:image/png");//设置输出类型
imagepng($im);//输出图像
imagedestroy($im);//销毁图像内存






?>
