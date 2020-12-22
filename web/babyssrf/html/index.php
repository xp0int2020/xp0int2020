<?php
highlight_file(__FILE__);
$flag_在哪里 = "flag in /flag";
if (isset($_GET['url'])) {
    $url=$_GET['url'];
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    $result = curl_exec($curl);

    curl_close($curl);
    echo $result;
}
?>