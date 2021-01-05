<!--
Author : FIFCOM
Copyright : Fifcom Technology Atelier
https://github.com/FIFCOM/HyperTool/hash
-->
<?php
$algo = isset($_REQUEST['algo'])?$_REQUEST['algo']:0;
$content = isset($_REQUEST['content'])?$_REQUEST['content']:"";
if (!$content){
    $result = "";
    $base64_result = "";
} else if (HyperHash($algo,$content)=="Hummm...you don't seem to choose an algorithm."){
    $result = "Hummm...you don't seem to choose an algorithm.";
    $base64_result = "Hummm...you don't seem to choose an algorithm.";
} else {
    $result = HyperHash($algo,$content);
    $base64_result = base64_encode($result);
}
require_once("index.html.php");

function HyperHash($algo,$content) {
    if ($algo == '0' || $algo == '1'){
        return "Hummm...you don't seem to choose an algorithm.";
    } else {
        return hash("$algo", $content);
    }
}
?>