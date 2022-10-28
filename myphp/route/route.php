<?php

function purl($url){//url = $_SERVER['REQUEST_URI'];
	$request_url = filter_var($url, FILTER_VALIDATE_URL);// Validate URL first
	$parsed_url = parse_url($request_url);// Parse URL
	return $parsed_url;
}

function route($route, $filepath, $purl){
	if (!$purl){
		$purl = purl($_SERVER['REQUEST_URI']);
	}
	$route = trim($route,'/');
	$rqpath = trim($purl['path'],'/');
	$route_parts = explode('/',$route);
	$upath_parts = explode('/',$rqpath);
	return routematch($route_parts, $upath_parts, $filepath);
}

function routematch($route_parts, $upath_parts, $filepath){
	global $ROOT; // $_SERVER['DOCUMENT_ROOT'];
	if (count($route_parts)==0 && count($upath_parts)==0 || arrayfirstel($route_parts)=='*'){
		include_once("$ROOT/$filepath");
		return 1;//exit();
	} elseif (count($route_parts) && count($upath_parts)){
		array_shift($route_parts);
		array_shift($upath_parts);
		return routematch($route_parts, $upath_parts, $filepath);
	}
	return 0;
}

function arrayfirstel($array){
	if (count($array)){
		return $array[0];
	} else {
		return null;
	}
}

function router(array $routearray, array $purl){
	if (!count($routearray)){
		return 0;
	}
	$k = array_keys($routearray)[0];
	$connected = route($k, $routearray[$k], $purl);
	if (! $connected) {
		array_shift($routearray);
		return router($routearray, $purl);
	} else {
		return $connected;
	}
}

/*Test*/
$ROOT = "";
$p = purl("https://www.cvlearning.net/path/to/page/?k=v&x=y#penis");
foreach($p as $k=>$v){
	echo $k . ': ' . $v . "\n";
}
echo json_encode($p);
$route = "/path/to/page/";
$filepath = "/filepath/test.php";
route($route, $filepath, $p);
echo router([$route => $filepath], $p);

/**/
?>
