<?php
    $key = "2006";
    $data = "hello php";

    $sign = hash("sha256",$data.$key);
//    echo $res;
    $url="http://b.2006php.com/b.php?data={$data}&sign={$sign}";

    $response = file_get_contents($url);
    echo $response;