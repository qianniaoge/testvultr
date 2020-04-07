<?
$file="ip#a.txt"; 
$data=file_get_contents($file); 
$arr=explode("\n",$data); 
$count=count($arr)-1; 
$num=500; 
$n=rand(0,$count); 
echo $arr[$n]
?>
