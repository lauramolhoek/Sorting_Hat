<form method="GET" action="addhouse.php">
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