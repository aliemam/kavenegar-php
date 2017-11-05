<?php

namespace Kavenegar\Exceptions;

class ApiException extends BaseException
{
	public function getName()
    {
        return 'ApiException';
    }
}

?>
