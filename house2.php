<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/house.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
   
<?php

 include "assets/php/wizard.php";

 include "assets/php/conn.php";
 $database = new Database();
 $database->createConnection();
 ?>

 <div class="info">
 <?php    
 $sqlGet = "select * from accounts  order by age ASC limit 1;";
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

    <form method="GET" action="addhouse2.php">
        <div id="house">
            <label for="house">
                To which house belongs this persons?          
            </label><br>
            <input type="radio" name="house"
                <?php if (isset($house) && $house=="1") echo "checked";?>
                    value="1" >This is a Gryffindor
                    <div id="image">
                        <img src="assets/image/gryffindor.jfif" alt="Gryffindor">
                        </img>
                    </div> 
                  
            <input type="radio" name="house"
                <?php if (isset($house) && $house=="4") echo "checked";?>
                    value="4" >This is a Slytherin <br>
                    <div id="image">
                        <img src="assets/image/slytherin.jfif" alt="slytherin">
                        </img>
                    </div> 
                    
            <input type="radio" name="house"
                <?php if (isset($house) && $house=="3") echo "checked";?>
                    value="3">This is a Ravenclaw <br>
                    <div id="image">
                        <img src="assets/image/ravenclaw.jfif" alt="ravenclaw">
                        </img>
                    </div>
                    
            <input type="radio" name="house"
                <?php if (isset($house) && $house=="2") echo "checked";?>
                    value="2">This is a Hufflepuff
                    <div id="image">
                        <img src="assets/image/Hufflepuff.jfif" alt="Hufflepuff">
                        </img>
                    </div>
                    
                    </div>
        <div id="submit_button">
                    <br>
                    <button>You are the sorting hat</button>
                    </a>
                </div>       
    </form>

</body>
</html>

</body>
</html>