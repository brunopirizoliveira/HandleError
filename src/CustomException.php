<?php

namespace SZH\CustomException;

use Exception;

class CustomException extends Exception
{

    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function customMessage() {
        echo "Custom Message will go here\n";
    }
}