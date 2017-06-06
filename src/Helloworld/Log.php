<?php

namespace Helloworld;

class Log {
    protected $message;
    
    public function __construct() {
        
    }
    
    public function getMessage() {
        return $this->message;
    }
    
    public function setMessage($message) {
        $this->message = $message;
    }
}
