<?php

namespace SZH\HandleError;

class HandleError {

    private $dict;
    private $trace;
    private $message;
    private $error;
    private $subcode;
    private $code;
    private $context;

    public function __construct() {
        // $this->dict = (new Dictionary())->getErrors();
        $jsonString = file_get_contents(storage_path().DIRECTORY_SEPARATOR.env('HANDLE_ERROR_JSON'));
        $this->dict = json_decode($jsonString, true);
    }

    public function handleError($statusCode)
    {
        // dd($error->getTraceAsString());
        $handledError = $this->dict[$statusCode];
        $handledError["message"] = $this->message;
        $handledError["trace"] = $this->trace;
        return json_encode($handledError);  
    }

    public function createError()
    {
        $handledError["message"] = $this->message;
        $handledError["trace"] = $this->trace;
        $handledError["error"] = $this->error;
        $handledError["context"] = $this->context;
        $handledError["code"] = $this->code;
        $handledError["subcode"] = $this->subcode;

        return $handledError;
    }


    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function setError($error)
    {
        $this->error = $error;
    }

    public function setTrace($trace)
    {
        $this->trace = $trace;
    }

    public function setContext($context)
    {
        $this->context = $context;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setSubcode($subcode)
    {
        $this->subcode = $subcode;
    }

}
