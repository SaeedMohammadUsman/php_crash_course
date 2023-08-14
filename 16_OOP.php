<?php




class User
{
    public $name;
    public $email;
    public $password;
    // a constractor 

    public function __construct($name, $email, $password){
        $this ->name =$name; 
        $this ->email =$email; 
        $this ->password =$password; 

    }
    
        
   


    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {

        return $this->name;
    }
}

$user1 = new User("ali","ali.com","123alijan");
// $user1->name = 'usman';
// var_dump($user1);
// var_dump($user1->name);

$user2 = new User('usman','moh.usman.com','123usmanjankhanahmadbilal');
// $user2->email = 'moh.usman.200@gmail.com';


// var_dump($user2->email);

// echo $user1->name;


// $user1->set_name('ali');

// echo $user1->name;

// $user2->set_name('ahmad khan');

// var_dump($user2);

// echo $user2->get_name();

// var_dump($user1);
// echo "/n";
// var_dump($user2);


//inheritence


class Employee extends User {
    protected $tit;
    public function __construct($name, $email, $password , $tit)
    {
        parent::__construct ($name, $email,$password);
        $this ->tit = $tit;
    }
    public function get_title () {
        return $this ->tit;
    }
} 




$emp1 = new Employee('usman','moh.usman@gmil.com','3rkjf','student');



echo $emp1->get_title();
