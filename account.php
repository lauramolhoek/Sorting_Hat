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