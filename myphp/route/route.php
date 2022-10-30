<?php

function purl($url){//url = $_SERVER['REQUEST_URI']; - not right
	$request_url = filter_var($url, FILTER_VALIDATE_URL);// Validate URL first
	$parsed_url = parse_url($request_url);// Parse URL
	return $parsed_url;
}

function route($route, $filepath){
	$rpath = $_SERVER['REQUEST_URI'];
	$route = trim($route,'/');
	$rpath = trim($rpath,'/');
	$route_parts = explode('/',$route);
	$rpath_parts = explode('/',$rpath);
	return routematch($route_parts, $rpath_parts, $filepath);
}

function routematch($route_parts, $rpath_parts, $filepath){
	global $ROOT; // $_SERVER['DOCUMENT_ROOT'];
	echo comment(json_encode($route_parts) . json_encode($rpath_parts));
	if ((count($route_parts)==0 && count($rpath_parts)==0) || arrayfirstel($route_parts)=='*'){
		include_once("$ROOT/$filepath");
		return 1;//exit();
	} elseif (count($route_parts) && count($rpath_parts) && ($route_parts[0] == $rpath_parts[0])){
		array_shift($route_parts);
		array_shift($rpath_parts);
		return routematch($route_parts, $rpath_parts, $filepath);
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

function router(array $routearray){
	if (!count($routearray)){
		return 0;
	}
	$k = array_keys($routearray)[0];
	$connected = route($k, $routearray[$k]);
	if (! $connected) {
		array_shift($routearray);
		return router($routearray);
	} else {
		return $connected;
	}
}

/*Test*
$ROOT = "";
$p = purl("https://www.cvlearning.net/path/to/page/?k=v&x=y#penis");
foreach($p as $k=>$v){
	echo $k . ': ' . $v . "\n";
}
$rp = "/path/to/page";
echo json_encode($p);
$route = "/path/to/page/";
$filepath = "/filepath/test.php";
route($route, $filepath, $rp);
echo router([$route => $filepath], $rp);

/**/
?>
