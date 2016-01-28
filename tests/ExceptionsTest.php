<?php

namespace Lib\Test;

use Lib\EvangelistStatus;

class ExceptionsTest extends \PHPUnit_Framework_TestCase
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
