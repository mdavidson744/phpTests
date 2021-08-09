<?php

//classes
class User {
    private $email;
    private $name;

    public function __construct($name, $email){
        $this->email = $email;
        $this->name = $name;
    }

    public function login(){
        echo $this->name . 'logged in';
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        if(is_string($name) && strlen($name) > 1){
            $this->name = $name;
            return "name has been updated to $name";
        } else{
            return 'not a valid name';
        }
    }
}

// $userOne = new User();

// $userOne->login();
// echo $userOne->name;

$userTwo = new User('yoshi', 'yoshi@test.co.uk');
// echo $userTwo->name;
// echo $userTwo->email;
// $userTwo->login();

echo $userTwo->getName();
echo '<br />';
echo $userTwo->setName('mark');
echo '<br />';
echo $userTwo->getName();

?>