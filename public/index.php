<?php

use App\Models\IdModel;
use App\Controllers\IdController;
use App\Core\Autoload;

require __DIR__ . '/../vendor/autoload.php';

// $controller = new IdController();
$idConverted = $controller->convertir(id: $_GET["id"]);
var_dump(value: $idConverted);

?>