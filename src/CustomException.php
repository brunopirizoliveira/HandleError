<?php

namespace SZH\HandleError;

use Exception;

class CustomException extends Exception
{

    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);

    }

    public function customMessage() 
    {
        $customHandleError = new HandleError();
        $handleError = $customHandleError->handleError((new CustomLog())->setCode($this->code)->setTrace($this->getTraceAsString()));
        if(!$handleError) {
            $this->createMessage();
        }
        
        return json_encode($handleError);
    }

    public function createMessage() 
    {
        $customLog = (new CustomLog())->setMessage($this->message)->setCode($this->code)->setTrace($this->getTraceAsString());
        return json_encode($customLog->getCustomLog());
    }
}

class CustomLog {

    private $trace;
    private $message;
    private $error;
    private $subcode;
    private $code;
    private $context;


	/**
	 * @param mixed $trace 
	 * @return self
	 */
	public function setTrace($trace): self {
		$this->trace = $trace;
		return $this;
	}
	
	/**
	 * @param mixed $message 
	 * @return self
	 */
	public function setMessage($message): self {
		$this->message = $message;
		return $this;
	}
	
	/**
	 * @param mixed $error 
	 * @return self
	 */
	public function setError($error): self {
		$this->error = $error;
		return $this;
	}
	
	/**
	 * @param mixed $subcode 
	 * @return self
	 */
	public function setSubcode($subcode): self {
		$this->subcode = $subcode;
		return $this;
	}
	
	/**
	 * @param mixed $code 
	 * @return self
	 */
	public function setCode($code): self {
		$this->code = $code;
		return $this;
	}
	
	/**
	 * @param mixed $context 
	 * @return self
	 */
	public function setContext($context): self {
		$this->context = $context;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCode() {
		return $this->code;
	}

    public function getCustomLog()
    {
        return [
            "Message" => $this->message,
            "Code" => $this->code,
            "Subcode" => $this->subcode,
            "Error" => $this->error,
            "Trace" => $this->trace,
            "Context" => $this->context
        ];
    }
 
}