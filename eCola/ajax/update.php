<?php
    $id = $_REQUEST["id"];
    $cat = $_REQUEST["cat"];
    $start_at = $_REQUEST["start_at"];
    $end_at = $_REQUEST["end_at"];
    $content = $_REQUEST["content"];

    echo '{"id":"'.$id.'","cat":"'.$cat.'","status":"success"}';
?>