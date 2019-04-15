<?php

$servername="localhost";
$username="nebojsa";
$password="sifra";
$db="employees";

$conn=new mysqli($servername,$username,$password,$db);

if($conn->connect_error){
    
    die("Greska");
}

$q=$_REQUEST['q'];
$hint="";

if($q!=""){
    
    $sql="SELECT first_name,last_name,gender FROM employees WHERE
    emp_no='$q'";
    
    $result=$conn->query($sql);
    
    if($result->num_rows>0){
        
        while($row=$result->fetch_assoc()){
            
         $hint.="Ime: " . $row['first_name'] . " Prezime " . $row['last_name'] . " Pol: ". $row['gender'] . "<br/>";  
            
        }
        
        
    }
    else 
    {
       $hint="nema rezultata";
    }
    
$conn->close();    
    
}

echo $hint;








?>