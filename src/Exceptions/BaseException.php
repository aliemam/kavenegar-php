<?php

namespace Kavenegar\Exceptions;

class BaseException extends \Exception
{
	public function getName()
    {
        return 'BaseException';
    }
    public function __construct($message, $code=0) {
        parent::__construct($message, $code);
    }
	public function errorMessage(){
		return "\r\n".$this->getName() . "[{$this->code}] : {$this->message}\r\n";
	}
}

?>

