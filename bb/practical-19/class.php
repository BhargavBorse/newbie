<?php
include("connection.php");

class student 
{
   
    var $name;
    var $age;
    var $city;
    var $id;
  
    function __construct($n,$a,$c,$i)

    {

    $this->name=$n;
    $this->age=$a;
    $this->city=$c;        
    $this->id=$i;
    }
    function insert()
    {
        $con=mysqli_connect("localhost","root","");
        $db="parul";
        mysqli_select_db($con,$db);
        $sql="insert into stud(id,name,city,age)values('".$this->id."','".$this->name."','".$this->city."','".$this->age."')" ;

        mysqli_query($con,$sql);
    
    }
    function display()
    {
        $con=mysqli_connect("localhost","root","");
        $db="parul";
        mysqli_select_db($con,$db);
  
        $sqls="select * from stud";
        $r=mysqli_query($con,$sqls);
        return $r;
    }
    function delete($i){
        $con=mysqli_connect("localhost","root","");
        $db="parul";
        mysqli_select_db($con,$db);
        $sqld="delete from stud where id=".$i ;

        mysqli_query($con,$sqld);
        


    }
    function update($i,$n,$a,$c)
    {
        
        $con=mysqli_connect("localhost","root","");
        $db="parul";
        mysqli_select_db($con,$db);
   
        
        $sqlu="update stud  set name='".$n."',city='".$c."',age='".$a."' where id='".$i."'" ;
        mysqli_query($con,$sqlu);
    
    
    }
    
}
?>