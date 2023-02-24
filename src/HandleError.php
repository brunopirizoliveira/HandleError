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

    public function handleError($customLog)
    {
        if(array_key_exists($customLog->getCode(), $this->dict)) 
        {
            $handledError = $this->dict[$customLog->getCode()];

            $customLog->setMessage($handledError['message'])->setError($handledError['error'])->setCode($handledError['code'])->setSubcode($handledError['subCode'])->setContext($handledError['context']);

            return $customLog->getCustomLog(); 
        }

        return false;
    }

}
