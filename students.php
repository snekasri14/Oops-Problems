// Problem: Create a class called "Student" that represents a student. The class should have the following attributes and methods:
Attributes:
* name (a string)
* age (an integer)
* subjects (a list of strings)
Methods:
* init(self, name, age): Initializes the student object with the given name and age. The subjects list should be initially empty.
* add_subject(self, subject): Adds a subject to the student's list of subjects.
* get_subjects(self): Returns the list of subjects the student is studying.
* is_eligible(self): Returns True if the student's age is greater than or equal to 18, and False otherwise.

<?Php
class Student {
    private $name;
    private $age;
    private $subjects;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        $this->subjects = [];
    }
    public function add_subject($subject) {
        $this->subjects[] = $subject;
    }
    public function get_subjects() {
        return $this->subjects;
    }
    public function is_eligible() {
        return $this->age >= 18;
    }
}
$student = new Student("sneka", 21);
$student->add_subject("cs");
$student->add_subject("maths");
echo "subjects: " . implode(", ", $student->get_subjects()) ."\n";
echo "is_eligible: " . ($student->is_eligible() ? "Yes" : "No");
?>