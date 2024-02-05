<?php
class User {
    protected $name;
    protected $email;

    // Constructor
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
        echo "A new $this->name ( $this->email ) created.<br>";
    }

    // dis-troyyyyyyyyyyyyyyyyy
    public function __destruct() {
        echo "User {$this->name} is destroyed . <br>";
    }

    // meth Overloadddddddddddddd
    public function __call($method, $arguments) {
        if ($method == 'setEmail') {
            $this->email = $arguments[0];
            echo "Email of {$this->name} has been changed to {$this->email} . <br>";
        } elseif ($method == 'setName') {
            $this->name = $arguments[0];
            echo "Name has been changed to {$this->name} . <br>";
        } else {
            echo "You called object method $method() . <br>";
        }
    }
    
}

class Admin extends User {
    public $level;

    public function __construct($name, $email, $level) {
        parent::__construct($name, $email);
        $this->level = $level;
        echo "The user $this->name ( $this->email ) has access level `$this->level` .<br>";
    }

    public function __destruct() {
        echo "Admin {$this->name} is destroyed . <br>";
    }

    public function __call($method, $arguments) {
        if ($method == 'setEmail') {
            $this->email = $arguments[0];
            echo "Email of {$this->name} has been changed to {$this->email} . <br>";
        } elseif ($method == 'setName') {
            $this->name = $arguments[0];
            echo "Name has been changed to {$this->name} . <br>";
        } else {
            echo "You called object method $method() . <br>";
        }
    }
    
    
}

$user = new User("Noob Man", "noobzz@test.com");
$admin = new Admin("Boss Man", "Bosszz@test.com", "super");
// $user->nonExistingMethod();
$user->setEmail('methoverload@test.com');
$user->setName('meth-over');
// ?> 

