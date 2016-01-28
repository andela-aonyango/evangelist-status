<?php

namespace Lib\Exceptions;

class NullUserException extends \Exception
{
    protected $message;

    /**
     * @param string $message
     */
    public function __construct($message) {
        $this->message = $message;

        // make sure everything is properly assigned
        parent::__construct($message);
    }
}
