<?php
echo 'your in the site controller namespace';


include('config.php');

include('view/site.php');

if($action=='about')
{
	echo '<pre>about action detected</pre>';
}
if($action=='index')
{
	echo '<pre>index action detected</pre>';
}