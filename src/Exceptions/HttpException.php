<?php

namespace Kavenegar\Exceptions;

class HttpException extends BaseException
{
	public function getName()
    {
        return 'HttpException';
    }	
}

?>