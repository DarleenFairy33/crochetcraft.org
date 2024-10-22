<?php
$content = $_GET["content"];
$file = uniqid() . ".html";
file_put_contents(filename: $file, data: $content);
echo $file;