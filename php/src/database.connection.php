<?php
class Dtb {
    private $host = "db";
    private $username = "MYSQL_USER";
    private $password = "MYSQL_PASSWORD";
    private $dbname = "MYSQL_DATABASE";



   function dbquery($name, $pwd, $email){
       $conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
       if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
       }
       $checkquery = "SELECT username, email FROM Users WHERE email = '{$email}' ";
       $results = mysqli_query($conn, $checkquery);
       $rows = mysqli_num_rows($results);

       if($rows == 0)
       {
           $sql = "INSERT INTO Users (username, email, password) VALUES ('{$name}', '{$email}', '{$pwd}')";
           if ($conn->query($sql) === TRUE) {
               echo "New record created successfully";
               header("Location: ../index.php");
           } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
           }
       }
       else
       {
           echo "<p>User with that email already exists!</p>";
       }
       $conn->close();
   }


}