<?php
/*Crie uma classe Pessoa com atributos e métodos que 
acreditar ser importante.
Crie cinco objetos do tipo Pessoa.
Crie uma classe SalaVirtual, com atributos e métodos 
que acreditar ser importante.
Crie dois objetos do tipo SalaVirtual.*/


class Person
{
    public $name;
    public $age;
    public $sex;
    public $nacionality;

    public function __construct(string $name, int $age, string $sex, string $nacionality)
    {
        if (is_string($name)) 
        {
            $this->name = $name; 
        }
        if (is_int($age)) 
        {
            $this->age = $age; 
        }
        if (is_string($sex)) 
        {
            $this->sex = $sex; 
        } 
        if (is_string($nacionality)) 
        {
            $this->nacionality = $nacionality; 
        }
    }

    public function check_age()
    {
        if($this->age >= 18)
        {
            echo "The person " . $this->name . " is on adult age!" . '<br>';
        }else
        {
            echo "The person " . $this->name . " isn't on adult age!" . '<br>';
        }
    }
}

class VirtualRoom
{
    private $classname;
    private $users_number;
    private $class_address;

    function __construct(string $classname, int $users_number, string $class_address)
    {
        if (is_string($classname)) 
        {
            $this->classname = $classname; 
        }
        if (is_int($users_number)) 
        {
            $this->users_number = $users_number; 
        }
        if (is_string($class_address)) 
        {
            $this->class_address = $class_address; 
        }
        $this->people = [];
    }

    public function addPerson($name, $age, $sex, $nacionalitys) 
    { 
        $this->people[] = new Person($name, $age, $sex, $nacionalitys);
    }

    public function getPerson()
    {
        return $this->people;
    }
}

/*
$first_person = new Person('Richard Steven', 25, 'Man', 'Canadian');
var_dump($first_person);
$first_person->check_age();

$second_person = new Person('Juliet Tuly', 32, 'Woman', 'Mexican');
var_dump($second_person);
$second_person->check_age();

$third_person = new Person('Natalie Mary', 22, 'Woman', 'Brazilian');
var_dump($third_person);
$third_person->check_age();

$fourth_person = new Person('Anttoile Hule', 15, 'Man', 'Polish');
var_dump($fourth_person);
$fourth_person->check_age();

$fifth_person = new Person('Mary Cristian', 25, 'Woamn', 'American');
var_dump($fifth_person);
$fifth_person->check_age();
*/

$first_class = new VirtualRoom('Minecraft Room', 150, 'www.mine.com');
$first_class->addPerson('Richard Steven', 25, 'Man', 'Canadian');
var_dump($first_class);
echo "<br>";
echo "<br>";

$first_class = new VirtualRoom('Minecraft Room', 150, 'www.mine.com');
$first_class->addPerson('Anttoile Hule', 15, 'Man', 'Polish');
var_dump($first_class);
echo "<br>";
echo "<br>";

$second_class = new VirtualRoom('Windows Room', 100, 'www.windows.com');
$second_class->addPerson('Juliet Tuly', 32, 'Woman', 'Mexican');
var_dump($second_class);
echo "<br>";
echo "<br>";

$second_class = new VirtualRoom('Windows Room', 100, 'www.windows.com');
$second_class->addPerson('Natalie Mary', 22, 'Woman', 'Brazilian');
var_dump($second_class);
echo "<br>";
echo "<br>";
?>