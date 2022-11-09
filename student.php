<?php
class Student{
   public $id;
   public $lastName;
   public $firstName;
   public $dob;
  public  function speak(){
       return" Hello student";
   }
   public function fullNames(){
       return $this->lastName."  ".$this->firstName;
   }
}
$student1 =new Student();
$student1->firstName='Eden';
$student1->lastName='Iris';
echo $student1->firstName;
echo "<br>";
// $student1=new Student(1,'Eden','ALice','2005-02-16');
echo $student1->fullNames();
echo " </br>";
$student1->speak();

?>