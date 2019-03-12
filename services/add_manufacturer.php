<?php

require '../classes/Manufacturer.php';

$manufacturer = new Manufacturer();

echo $manufacturer->insert(["name"=>$_REQUEST["name"]]);

