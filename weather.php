<?php

$city=$_GET['city'];

$city=str_replace(" ","",$city);

$contents=file_get_contents("https://www.weather-forecast.com/locations/Dallas/forecasts/latest");

preg_match("<p class="b-forecast__table-description-content"><span class="phrase">(.*?)<\/span>/s", $contents, $matches);

print_r($matches);


?>
