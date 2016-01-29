<?php
// Example usage of this package

require "vendor/autoload.php";

use Lib\EvangelistStatus;

$status = new EvangelistStatus("andela-aonyango");

echo $status->getStatus();
