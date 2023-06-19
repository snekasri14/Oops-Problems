// Problem: Create a base class called "Animal" with the following attributes and methods:
Attributes:
* name (a string)
* age (an integer)
Methods:
* init(self, name, age): Initializes the animal object with the given name and age.
* make_sound(self): Prints a generic sound that the animal makes.
Create two derived classes, "Dog" and "Cat", that inherit from the Animal class. Each derived class should have its own unique sound that overrides the make_sound() method from the Animal class.

<?Php
class Animal {
    protected $name;
    protected $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function make_sound() {
        echo "Animal sounds" . "\n";
    }
}
class dog extends Animal {
    public function make_sound() {
        echo "The dog barks" . "\n";
    }
}
class cat extends Animal {
    public function make_sound() {
        echo "The cat meows" ."\n";
    }
}
$dog = new dog("Tom", 5);
$dog->make_sound(); 
$cat = new cat("jerry", 2);
$cat->make_sound(); 
?>            