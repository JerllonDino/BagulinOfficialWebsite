<?php
header("Content-Type: application/json", true);
$path = $_SERVER['DOCUMENT_ROOT'] . "/bagulin";
if (isset($_POST['hrefs'])) {
	
	$file = basename($_POST['hrefs']);
	// die($file." ".$path." ".$path.'/docs/docs/'.$file." ".$_POST['hrefs']);
}else{
	$file = /*"none"*/null;
}

$url = $path.'/docs/docs/'.$file;
// die($url);
header("Content-type: application/pdf");
header("Content-Length: " . filesize($url));
header("Content-Disposition: inline; filename = '".$file."'");
// header('Content-Transfer-Encoding: binary'); 
// header('Accept-Ranges: bytes'); 
readfile($url);

/*$path=$_POST['href'];
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename='.$path);
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($path);*/
?>