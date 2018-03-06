<?php 
// intrface as a child of Countable and ArrayAccess

interface ArrayInterface extends Countable, ArrayAccess
{
    
}


//a class which implement this interfaces
class ArrayElement implements ArrayInterface
{
    //methods from ArrayInterface
    private $internal = [];
    public function offsetGet($offset){
        return $this->internal[$offset];
    }
    public function offsetSet($offset, $value){
        $this->internal[$offset] = $value;
    }
    public function offsetExists($offset){
        return isset ($this->internal[$offset]);
    }
    public function offsetUnset($offset){
        unset ($this->internal[$offset]);
    }
    
    //
    private $count = 0;
    public function count()
    {
        //return ++$this->count;
        return count($this->internal);
    }

}

$array = new ArrayElement();
$array->offsetSet(1, 2);
echo count($array); // 1

interface UserInterface
{
    public function getId($id);
    
    public function getRoles($roles);
    
    public function getPassword($password);
    
    public function getSalt($salt);
    
    public function getUsername($username);
    
    public function setRols($roles);
    
    public function addRole($role);
    
    public function setPassword($password);
    
    public function setSalt($salt);
    
    public function setUsername($username);
    
    public function eraseCredentials();
    
}































