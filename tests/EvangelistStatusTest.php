<?php
/**
 * @file     EvangelistStatusTest.php
 * This file is a class that contains tests for the EvangelistStatus class
 * @package  Lib\EvangelistStatus
 * @author   andrew <andrew.onyango@andela.com>
 * @license  MIT => https://opensource.org/licenses/MIT
 */
namespace Lib\Test;

use Lib\EvangelistStatus;
use PHPUnit_Framework_TestCase;

/**
 * @category Class
 * @package  Lib\EvangelistStatus
 */
class EvangelistStatusTest extends PHPUnit_Framework_TestCase
{
    /**
    *Tests all the possible statuses an evangelist might have
    */
    public function testGetStatus()
    {
        // test with a user who has less than 5 public repos
        $status = new EvangelistStatus("andela-aomondi");
        $this->assertEquals("You call yourself a programmer?!!", $status->getStatus());

        // test with a user who has 5-10 public repos
        $status = new EvangelistStatus("andela-jngatia");
        $this->assertEquals("Prodigal Junior Evangelist", $status->getStatus());

        // test with a user who has 11-20 public repos
        $status = new EvangelistStatus("andela-cganga");
        $this->assertEquals("Associate Evangelist", $status->getStatus());

        // test with a user who has > 20 public repos
        $status = new EvangelistStatus("vonmises");
        $this->assertEquals("Senior Evangelist", $status->getStatus());
    }
}
