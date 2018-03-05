<?php
namespace Exception;

class NotAllowedRoleException extends \RuntimeException
{
    public function __construct ($message = null,
                                 $code = null, 
                                 $previous = null,
                                 $allowedLabel = [ROLE_USER, ROLE_ADMIN] //the list of allowed role label (as array)
    ) {
        
    }
}

/*
 additionally to the constructor parameter, 
		 
		and the current unmatching label. 
		The message of this exception MUST in every cases 
		  make an explicit reference to the allowed role label, as comma separated label list, 
		  and an explicit reference to the mismatching label. 
 * */
