<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<ul>, initial-scale=1.0">
    <link href="assets/css/indexAccount.css" rel="stylesheet" type="text/css">    
    <title>Document</title>
</head>
<body>
<div id="form">
        <h1>
            Create account
        </h1>
        
        <img src="assets/image/who are you.jfif" alt="Who are you?">
        </img> 

        <form action="overview.php"  method="GET">
            <div id="fill_in_form">
                <div>
                    <label for="Firstname">
                        Firstname
                        </label> 
                        <br>
                    <input type="text" name="Firstname" id="Firstname" required/>
                    <br>
                    <br>
                </div> 
                <div>
                    <label for="Lastname">
                    Lastname
                        </label> 
                        <br>
                    <input type="text" name="Lastname" id="Lastname" required/>
                    <br>
                </div> 

                <div id="age">
                    <br>
                    <label for="age">
                        Age
                        </label> 
                        <br>
                    <input type="number" name="age" id="age" required/>
                    <br>
                    <br>
                </div>

                <div id="gender">
                <label for="gender">
                        Gender
                        </label><br>
                     <input type="radio" name="gender"
                        <?php if (isset($gender) && $gender=="female") echo "checked";?>
                        value="female" >Female <br>
                        <input type="radio" name="gender"
                        <?php if (isset($gender) && $gender=="male") echo "checked";?>
                        value="male">Male <br>
                        <input type="radio" name="gender"
                        <?php if (isset($gender) && $gender=="other") echo "checked";?>
                        value="other">Other
                    <br>
                    <br>
                </div>
                <div>
                    <label for="description">
                    Description
                        </label> 
                        <br>
                    <input type="text" name="description" id="description" required/>
                    <br>
                </div>
                
            
                <div id="submit_button">
                    <br>
                    <button>Submit</button>
                    </a>
                </div>
            </form>
        </div>
    </div> 


</body>
</html>