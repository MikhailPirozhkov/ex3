<?php
require_once 'model.php';
$data_file = 'http://export.yandex.ru/weather-ng/forecasts/27331.xml';
$weather = new Weather ($data_file);