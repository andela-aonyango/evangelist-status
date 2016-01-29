<?php
/**
 * @file     ExceptionsTest.php
 * This file is a class that contains tests for exceptions in this project
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
class ExceptionsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Lib\Exceptions\NullUserException
     */
    public function testNullUserException()
    {
        // should throw an exception even if there are spaces
        $status = new EvangelistStatus("    ");
    }
}
