<?php
declare(strict_types=1);
?>
<?php
include_once('View/header.php');

include_once('Controller/Controller.php');
$controller = new Controller();
$controller->invoke();
?>