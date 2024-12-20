<?php
class Person {
    public $name;
    public $age;
    public $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
    public function getDetails() {
        return "Name: $this->name, Age: $this->age, Address: $this->address";
    }
}
class Student extends Person {
    public $faculty;
    public $semester;

    public function __construct($name, $age, $address, $faculty, $semester) {
        parent::__construct($name, $age, $address);
        $this->faculty = $faculty;
        $this->semester = $semester;
    }
    public function getDetails() {
        return parent::getDetails() . ", Faculty: $this->faculty, Semester: $this->semester";
    }
}
class Teacher extends Person {
    public $courses;

    public function __construct($name, $age, $address, $courses) {
        parent::__construct($name, $age, $address);
        $this->courses = $courses;
    }
    public function getDetails() {
        return parent::getDetails() . ", Courses: " . implode(", ", $this->courses);
    }
}
$student = new Student("Abin Hyanmikha", 60, "Bhaktapur", "Computer Science", 5);
echo $student->getDetails() . "\n";
$teacher = new Teacher("Ram Suwal", 45, "Kathmandu", ["Math", "Science"]);
echo $teacher->getDetails() . "\n";
?>
