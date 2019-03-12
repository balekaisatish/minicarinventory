<?php

require '../classes/Inventory.php';
require '../classes/Model.php';

$model = new Model();

echo $model->soldOut($_REQUEST['id']);