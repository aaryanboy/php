<?php
class Student {
   private $id;
   private $name;
   private $age; 
   private $address;
   private $faculty;
   private $semester;

   public function __construct($id, $name, $age, $address, $faculty, $semester) {
       $this->id = $id;
       $this->name = $name;
       $this->age = $age;
       $this->address = $address;
       $this->faculty = $faculty;
       $this->semester = $semester;
   }
   public function display() {
       echo "ID: " . $this->id . "\n";
       echo "Name: " . $this->name . "\n";
       echo "Age: " . $this->age . "\n";
       echo "Address: " . $this->address . "\n";
       echo "Faculty: " . $this->faculty . "\n";
       echo "Semester: " . $this->semester . "\n";
   }
}
$student1 = new Student(1, "Vaskar", 20, "Bhaktapur", "Science", 2);
$student1->display();
?>
