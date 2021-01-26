<?php

require __DIR__ . "/Config.php";
require __DIR__ . "/Helpers.php";

$string = "Isso é um Texto de EXEMPLO";

echo str_slug($string);
echo "<br>";

echo str_studly_case($string);
echo "<br>";

echo str_camel_case($string);
echo "<br>";

echo str_title($string);
echo "<br>";

echo str_limit_chars($string, 10, "...");
echo "<br>";

echo str_limit_words($string, 4, "...");
echo "<br>";

echo str_price("1458");
echo "<br>";

echo url("/user/1");
echo "<br>";

echo url_back();
echo "<br>";

//echo redirect("https://www.google.com");
echo "<br>";

echo date_fmt("now", "d/m/Y H\hi");
echo "<br>";

echo date_fmt_br("now");
echo "<br>";

echo date_fmt_app("now");
echo "<br>";