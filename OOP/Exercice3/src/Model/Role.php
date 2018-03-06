<?php
namespace Model;

use Exception\NotAllowedRoleException;

class Role
{
    public const ROLE_USER = 'ROLE_USER';
    
    public const ROLE_ADMIN = 'ROLE_ADMIN';
    
    private $id;
    
    protected $label;
    
    
    
    public function __construct($label)
    {
        // it was duplication to create label ....
        $this->setLabel = $label;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getLabel()
    {
        return $this->label;
    }
    
//The Model\Role class MUST be updated to throw the exception on setting a Role label not contained in the constants.
    
    public function setLabel($label)
    {   
        //create a variable arr
        $allowedSet = [self::ROLE_USER, self::ROLE_ADMIN];
        if (in_array($label,$allowedSet)){
            $this->label = $label;
            return $this;
        }
        throw new \Model\NotAllowedRoleException();
    }
}

