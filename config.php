<?php
$url_params = explode('?r=',$_SERVER['REQUEST_URI'],2);
$get = explode('/',$_GET['r']);
$controller = $get[0];
$action= $get[1];
$baseUrl = $url_params[0].'?r=';