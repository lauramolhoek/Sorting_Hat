<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/indexAccount.css" rel="stylesheet" type="text/css">  
    <title>Document</title>
</head>
<body>
        <h1>
            Create account
        </h1>  
        <img src="assets/image/harry-potter-sorcerers-stone.gif" alt="Harry potter receiving multiple letters">
        </img> 
    <?php
  
               
  include "assets/php/conn.php";
   $database = new Database();
   $database->createConnection();

   $firstname = $_GET["Firstname"];
   $lastname = $_GET["Lastname"]; 
   $age = $_GET["age"];
   $gender = $_GET["gender"]; 
   $description = $_GET["description"];
  
  
    $sqlInsert = "INSERT INTO accounts (firstname, lastname , age, gender, info) 
    VALUES ('$firstname','$lastname','$age', '$gender', '$description');";
    $database->InsertQuery($sqlInsert); 
    $database->closeConnection();
    ?>

    <h3> 
   
   You have been added to the sorting hat!
 
  
</h3> 

<br>
<br>
<br>
<br>
<br>
<nav>
    <ul>
        <el>
            <a href="house.php">
                Put people in a house
            </a>
        </el>
     </ul>
</nav>
  
</body>
</html>