<?php

$state = $_GET['state'];
$district = $_GET['district'];
$pH = $_GET['pH'];
$potassium = $_GET['potassium'];
$phosphorous = $_GET['phosphorous'];
$nitrogen = $_GET['nitrogen'];



$res = shell_exec('python3 recommend_crop.py "'.$state.'" "'.$district.'" "'.$pH.'" "'.$potassium.'" "'.$phosphorous.'" "'.$nitrogen.'" 2>&1');

echo $res;



?>
