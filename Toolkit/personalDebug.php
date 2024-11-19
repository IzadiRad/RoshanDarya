<?php
function debug_to_console($data)
{
    $output = $data;
    echo "<script>console.log('Debug Objects: " . $output . "');</script>";
}
?>