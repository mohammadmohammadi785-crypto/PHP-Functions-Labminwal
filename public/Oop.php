<?php
class User
{
    private $name;
    private $email;

    public function message()
    {
        return "$this->name Sent you a Message";
    }

    public function addFriend() {}
}

/*
 * // inheritance
 * class Animal
 * {
 *     private $name;
 *     private $age;
 *
 *     public function __construct($nam, $sin)
 *     {
 *         $this->name = $nam;
 *         $this->age = $sin;
 *     }
 *
 *     public function eat()
 *     {
 *         return "$this->name can eat somthing";
 *     }
 *
 *     public function drink()
 *     {
 *         return "$this->name can drink";
 *     }
 *
 *     public function setName($name)
 *     {
 *         $this->name = $name;
 *     }
 *
 *     public function getName()
 *     {
 *         return $this->name;
 *     }
 * };
 * $animal1 = new Animal('Sheep', 5);
 *
 * // echo $animal1->getName();
 * class Human extends Animal
 * {
 *     private $degreeOfEducation;
 *     private $lastName;
 *
 *     public function __construct($name, $age, $degree, $lastName)
 *     {
 *         $this->degreeOfEducation = $degree;
 *         $this->lastName = $lastName;
 *         parent::__construct($name, $age);
 *     }
 *
 *     public function Think()
 *     {
 *         return parent::getName() . ' can Think';
 *     }
 * }
 *
 * $person1 = new Human('Ali', 19, 12, 'Mohammadi');
 * $person1->setName('Ahmad');
 * echo $person1->getName() . '<br>';
 * echo $person1->Think();
 *
 *
 * Object oriented programming
 * کمک می کند که قابل استفاده مججد بسازیم
 * کد را خوانا تر نموده و قابل تغییر نماییم
 * Class(قالب برای اشیا)
 * class User
 * {
 *     public $username;
 *     private $email;
 *
 *     public function getEmail()
 *     {
 *         return $this->email;
 *     }
 *
 *     public function setEmail($email)
 *     {
 *         if (strpos($email, '@') > -1) {
 *             $this->email = $email;
 *         }
 *     }
 *
 *
 *      * access modifier:
 *      * Encapsolation
 *      * 1. public یعنی این که میتوانی هم داخل کلاس میتوانی به امو پراپرتی در دسترس باشی بتوانی گیت کنی و بتوانی سیت کنی
 *      * 2. private عبارت از اکسیس مودیفایر یه که فقط در داخل کلاس به پراپرتی ها به میتود ها تو در دسترس استی ولی در بیرون کلاس از امو میتود ها استفاده کده نمیتوانی
 *      * 3. protacted عبارت از اکسیس مودیفایر یه که ام تو میتوانی که در خود پهرینت می تانی که استفاده کنی و هم ده چایلد های شی
 *      *
 *
 *     public function __construct($name, $emailAddress)
 *     {
 *         $this->username = $name;
 *         $this->email = $emailAddress;
 *     }
 *
 *     public function post()
 *     {
 *         return "$this->username posted something";
 *     }
 *
 *     public function addFriend()
 *     {
 *         return "$this->email added a Friend";
 *     }
 * }
 *
 * $userOne = new User('Ali Ahmadi', 'aliahmadi@example.com');
 * $userTwo = new User('Ahmad', 'ahmad@example.com');
 * echo $userOne->addFriend() . '<br>';
 * echo $userTwo->setEmail('ahmadali@gmail.com');
 * echo $userTwo->getEmail();
 * --------------------------------------------------------------------------------------------------------------------------------------------------
 * echo $userOne->username . '<br>';
 * echo $userOne->email . '<br>';
 * echo $userOne->post() . '<br>';
 * echo $userOne->addFriend();
 * echo '<hr>';
 * // USER TWO
 * $userTwo->username = 'mohammadahmadi';
 * $userTwo->email = 'mohammadahmadi@example.com';
 * echo $userTwo->username . '<br>';
 * echo $userTwo->email . '<br>';
 * echo $userTwo->post() . '<br>';
 * echo $userTwo->addFriend();
 *
 * echo $userOne->post() . '<br>';
 * $userTwo = new User('Mohammad', 'mohammad@example.com');
 * echo $userTwo->post() . '<br>';
 */
