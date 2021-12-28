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


<h1> Thank you for vote!</h1>
<img src="assets/image/sortinghat.jfif" alt="the sorting hat">
</img> 
<br>
<br>
<div>
               Other people have please this person in the following house(s).
               <br>
               1 = Gryffindor <br>
               2 = Hufflepuff <br>
               3 = Ravenclaw <br>
               4 = Slytherin <br>
            </div> 

<ul>
            <?php
               include "assets/php/conn.php";
               $database = new Database();
               $database->createConnection();

               $sqlGet = "select * from accounts order by age ASC limit 1;";
               $accounts = $database->getQuery($sqlGet);
               foreach ($accounts as $account) {
                ?>
                    <el class="account" data-id="<?php echo $account['id'];?>">
                        <?php
                            echo $account["firstname"] . "  " . $account["lastname"];
                        ?>
                    </el>
                <?php
                    }
              
                $id=  $account["id"]; 
               $house = $_GET["house"]; 
               
               $score_received = $id;
               

             
               $sqlInsert = "INSERT INTO score_give (score_received, house) 
           VALUES ('$score_received','$house');";
           $database->InsertQuery($sqlInsert); 
           ?>
             
           <?php
                $scores = $database->getQuery("select * from score_give where score_received ='$score_received';");

                foreach ($scores as $score) {
            ?>
                <li class="score" data-id="<?php echo $score['id'];?>">
                    <?php
                        echo $score["house"];
                    ?>
                </li>
            <?php
                }



                $database->closeConnection();
            ?>


<h2> After all this sorting you must be tired.
    Take a break and come back a next time to sort some extra people!
            </h2>   

</body>
</html>