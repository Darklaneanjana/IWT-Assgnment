<?php
  require_once('dbh.inc.php');
         if(isset($_POST["ok"]))
         {
         $Name= $_POST["Name"];
         $Subject= $_POST["Subject"];
         $Phone= $_POST["Phone"];
         $Email= $_POST["Email"];
         $Message= $_POST["Message"];


        $sql= "INSERT INTO contact(name,subject,phone,email,message)VALUES('$Name','$Subject','$Phone','$Email','$Message')";
        if($conn->query($sql)){
            echo "Inserted successfully";
        }
        else{
        echo "Error:". $conn->error;
        }
       }

?>