<?php
$title = "Home page";
$h1 = "Информация о компании";
$year = 2022;

#include "site.php";

$content = file_get_contents("site.html");
$content = str_replace("{{ title }}", $title, $content);
$content = str_replace("{{ h1 }}", $h1, $content);
$content = str_replace("{{ year }}", $year, $content);

echo $content;
