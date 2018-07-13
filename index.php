<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  echo 'you reached it with post';
}else{
	
if(!empty($_GET['r']))
{$ca=explode('/',$_GET["r"],2); 
include('controller/'.$ca[0].'.php');
}else{
header('Location: index.php?r=site/index');	
}
}