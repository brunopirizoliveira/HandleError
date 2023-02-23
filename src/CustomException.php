<?php

namespace SZH\HandleError;

use Exception;

class CustomException extends Exception
{

    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);

    }

    public function customMessage() {
        
        $customHandleError = new \SZH\HandleError\HandleError();
        $customHandleError->setTrace($this->getTraceAsString());
        $handleError = $customHandleError->handleError($this->getCode());
        
        return json_encode($handleError);  
    }
}