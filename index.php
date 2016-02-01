<?php
// Example usage of this package

require "vendor/autoload.php";

use Lib\EvangelistStatus;
use Lib\Exceptions\NullUserException;
use Lib\Exceptions\UserNotFoundException;

// valid and invalid users
$users = [
    "valid"         => "vonmises",
    "invalid"       => "  ",
    "non-existent"  => "jahsgdkjahsgd",
];

// how one can use this package, including exceptions
foreach ($users as $key => $value) {
    try {
        $status = new EvangelistStatus($users[$key]);
        echo $status->getStatus() . "<br>";
    } catch (NullUserException $e) {
        echo $e->getMessage() . "<br>";
    } catch (UserNotFoundException $e) {
        echo $e->getMessage() . "<br>";
    }
}