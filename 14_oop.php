<?php

class User
{
    public $name;
    public $email;
    public $password;

    // function set_name($name)
    // {
    //     $this->name = $name;
    // }
    // function get_name()
    // {
    //     return $this->name;
    // }
    function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}

//instatiate the class
$user1 = new User('blaise', 'b@gmail.com', '1234');
$user2 = new User('alice', 'a@gmail.com', '5678');

// //set the name of the user
// $user1->set_name("Blaise");
// $user2->set_name("Alice");

// //get the name of the user
// echo $user1->get_name() . "<br>";
// echo $user2->get_name() . "<br>";
echo $user1->name . "<br>";


//inheritance

class employee extends User
{
    public $position;

    function __construct($name, $email, $password, $position)
    {
        parent::__construct($name, $email, $password);
        $this->position = $position;
    }
}
