<?php

namespace SZH\HandleError;

class HandleError {

    private $dict;
    private $trace;
    private $message;

    public function __construct() {
        // $this->dict = (new Dictionary())->getErrors();
        $jsonString = file_get_contents(storage_path().DIRECTORY_SEPARATOR.env('HANDLE_ERROR_JSON'));
        $this->dict = json_decode($jsonString, true);
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function setTrace($trace)
    {
        $this->trace = $trace;
    }

    public function handleError($statusCode)
    {
        // dd($error->getTraceAsString());
        $handledError = $this->dict[$statusCode];
        $handledError["message"] = $this->message;
        $handledError["trace"] = $this->trace;
        return json_encode($handledError);  
    }

}
