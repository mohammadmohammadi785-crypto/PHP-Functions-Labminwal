<?php
class User
{
    public $name;
    protected $email;
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function getName()
    {
        echo ucfirst($this->name);
    }
    public function __destruct()
    {
        echo "<h1>$this->name has been removed</h1>";
    }
}
$user1 = new User("ali reza", "ali@example.com");
echo $user1->name . "<br>";
$user1->getName();
