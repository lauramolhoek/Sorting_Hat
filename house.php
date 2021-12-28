<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="assets/css/house.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <h1>
        To which house does this person belong?
    </h1>
    <?php
    include "assets/php/wizard.php";
    include "assets/php/conn.php";
    $database = new Database();
    $database->createConnection();
    ?>
    <br>
    <div class="info">
        
    <?php    
    $sqlGet = "select * from accounts order by info ASC limit 1;";
    $accounts = $database->getQuery($sqlGet);
    

    
    foreach ($accounts as $account) {
        ?>
            
            <el class="account" data-id="<?php echo $account['id'];?>">
                <?php
                
                    echo "Name: ";
                    echo $account["firstname"];

                ?>
            </el>
    
            <el class="account" data-id="<?php echo $account['id'];?>">
                <?php
                    echo $account["lastname"];
                ?>
            </el>
            <br>
            <el class="account" data-id="<?php echo $account['id'];?>">
                <?php
                     echo "Age: ";
                    echo $account["age"];
                ?>
            </el>
            <br>
            <el class="account" data-id="<?php echo $account['id'];?>">
                <?php
                     echo "Gender: ";
                    echo $account["gender"];
                ?>
            </el>
            <br>
            <el class="account" data-id="<?php echo $account['id'];?>">
                <?php
                    echo "Description: ";
                    echo $account["info"];
                ?>
            </el>
            <br>
            
        <?php
            }
     
   ?>
    </div>

    <br>
    <br>
    <br>
   
   
    <?php
     include "assets/php/choice.php";

    $id = $account["id"];

    $house = $_GET["house"]; 

    $score_received = $id;
  
    $sqlInsert = "INSERT INTO score_give (score_received, house) 
VALUES ('$score_received','$house');";
$database->InsertQuery($sqlInsert); 
    


    ?>



</body>
</html>