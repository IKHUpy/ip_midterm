<?php
	
require_once "controllers/template.controller.php";
require_once "controllers/clients.controller.php";
require_once "controllers/clientsingle.controller.php";
require_once "controllers/payroll.controller.php";
require_once "controllers/products.controller.php";
require_once "controllers/sales.controller.php";

require_once "models/clients.model.php";
require_once "models/clientsingle.model.php";
require_once "models/payroll.model.php";
require_once "models/products.model.php";
require_once "models/sales.model.php";

$template = new ControllerTemplate();
$template -> ctrTemplate();