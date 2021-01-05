<!--
Author : FIFCOM
Copyright : Fifcom Technology Atelier
https://github.com/FIFCOM/HyperTool/base64
-->
<?php
$content=isset($_REQUEST['content'])?$_REQUEST['content']:"";
$content=str_replace("*","+",$content);
$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:0;
$COPY_BUTTON_STATUS = "disabled";
if ($mode){
    if ($mode == "encode"){
        if ($content){
            $result = base64_encode($content);
            $COPY_BUTTON_STATUS = "";
        }else {
            $result = "Encode error : No content.";
        }
    }else if ($mode == "decode"){
        if ($content){
            $result = base64_decode($content);
            $COPY_BUTTON_STATUS = "";
        }else {
            $result = "Decode error : No content.";
        }
    }
}
require_once("index.html.php");
?>