<?php

namespace SZ\Utils\Dictionary;

class Dictionary
{

    private $errors = [
        "400" => ["error" => "Bad Request", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "401" => ["error" => "Unauthorized", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "402" => ["error" => "Payment Required", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "403" => ["error" => "Forbidden", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "404" => ["error" => "Not Found", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "405" => ["error" => "Method Not Allowed", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "406" => ["error" => "Not Acceptable", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "407" => ["error" => "Proxy Authentication Required", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "408" => ["error" => "Request Time-out", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "409" => ["error" => "Conflict", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "410" => ["error" => "Gone", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "411" => ["error" => "Length Required", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "412" => ["error" => "Precondition Failed", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "413" => ["error" => "Request Entity Too Large", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "414" => ["error" => "Request-URL Too Large", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "415" => ["error" => "Unsupported Media Type", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "416" => ["error" => "Request Range Not Satisfiable", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "417" => ["error" => "Expectation Failed", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "500" => ["error" => "Internal Server Error", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "501" => ["error" => "Not Implemented", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "502" => ["error" => "Bad Gateway", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "503" => ["error" => "Service Unavailable", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "504" => ["error" => "Gateway Time-out", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
        "505" => ["error" => "HTTP Version Not Supported", "message" => "message", "traceId" => "traceId", "context" => "context", "code" => "code", "subCode" => "subcode"],
    ];

    public function getErrors()
    {
        return $this->errors;
    }
}
