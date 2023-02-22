<?php

namespace SZH\HandleError;

use Exception;

class CustomException extends Exception
{

    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
        $customError = new HandleError();
        $customError->setTrace($this->getTraceAsString());
        $customError->handleError($this);
    }

    public function customMessage() {
        echo "Custom Message will go here\n";
    }
}