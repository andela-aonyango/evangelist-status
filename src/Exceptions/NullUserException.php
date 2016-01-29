<?php
/**
 * @file     NullUserException.php
 * This file is a class that should be used to communicate a null user
 * error to a user.
 * @package  Lib\EvangelistStatus
 * @author   andrew <andrew.onyango@andela.com>
 * @license  MIT => https://opensource.org/licenses/MIT
 */
namespace Lib\Exceptions;

/**
 * @category Class
 * @package  Lib\EvangelistStatus
 */
class NullUserException extends \Exception
{
    protected $message;

    /**
     * @param string $message
     */
    public function __construct($message) 
    {
        $this->message = $message;

        // make sure everything is properly assigned
        parent::__construct($message);
    }
}
