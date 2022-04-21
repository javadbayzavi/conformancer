<?php

class User
{
    private int $Id;
    private string $fistname;
    private string $lastname;
    private string $email;
    private const _SEPARATOR = " ";

    public function __construct(int $id = 0,string $fnam = "", 
                                string $lnam = "", string $eml="")
    {
        $this->setId($id);
        $this->setFirstName($fnam);
        $this->setLastName($lnam);
        $this->setEmail($eml);
    }

    public function setId(string $value)
    {
        $this->Id = $value;
    }
    public function getId()
    {
        return $this->Id;
    }
    public function setFirstName(string $value)
    {
        $this->firstname = ($value == "")? "User FirstName" : $value;
    }
    public function getFirstName()
    {
        return $this->firstname;
    }

    public function setLastName(string $value)
    {
        $this->lastname = ($value == "")? "User LastName" : $value;
    }
    public function getLasName()
    {
        return $this->lastname;
    }

    public function setEmail(string $value)
    {
        $this->email = ($value == "" &&
        !filter_var($value, FILTER_VALIDATE_EMAIL))? "user@domain.com" : $value;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function __toString()
    {
        return $this->getFirstName() . _SEPARATOR 
        . $this->getLasName() . _SEPARATOR
        . $this->getEmail();
    }
}
$user = new User();
 
$user->setFirstName('John')
    ->setLastName('Doe')
    ->setEmail('john.doe@example.com')
;
 
echo $user;

?>