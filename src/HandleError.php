<?php

namespace SZH\HandleError;

class HandleError {

    private $dict;

    public function __construct($jsonFile) {
        // $this->dict = (new Dictionary())->getErrors();
        $this->dict = $jsonFile;
    }

    public function handleError($serverError)
    {
        $handledError = $this->dict[$serverError];        

        header("Content-Type: application/json");
        return json_encode($handledError);  
    }

}
