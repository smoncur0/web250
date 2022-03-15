<style>

#form{
    text-align: center;
	background-color: rgba(202, 143, 75, 0.781);
    padding: 1px 20px;
    margin: auto;
    margin-top: 5px;
    border: 1px solid rgba(170, 114, 30, 0.897); 
    -moz-box-shadow: 3px 3px 8px rgb(7, 104, 47);  
    -webkit-box-shadow: 3px 3px 8px rgb(8, 78, 46);  
    box-shadow: 3px 3px 8px rgba(61, 87, 55, 0.623);  
    width: 400px;
    height: 900px;
    text-align: center;
}
</style>
<h2>Everything Form</h2>
      
      <div class="container">

      <form id="form" method = "post" action = "">
        Full Name: <input type = "text" name = "name"> <br />
            <span class = "Validator"> <?php echo $nameValid;?></span>
            
        E-mail: <input type = "text" name = "email"> <br />
         <span class = "Validator"> <?php echo $emailValid;?></span>
  
      Nickname: <input type = "text" name = "nickname"> <br />
     
         
          
                <p>Do you have any Food Allergies or Sensitivities? If so, please list them.<p> <textarea name = "allergies" rows = "4" cols = "20"></textarea>
           
           <br />
                     Team Kale or Team Iceberg?  <br />
                     <input type = "radio" name = "greenss" value = "kale"> Team Kale <br />
                     <input type = "radio" name = "greenss" value = "iceburg"> Team Iceberg <br />
                     <span class = "Validator"> <?php echo $greenssValid;?></span>  <br />
       
                 Toppings: <select name = "toppings[]" size = "4" multiple>  <br />
                        <option value = "Wonton">Wonton Strips</option>  <br />
                        <option value = "Croutons">Croutons</option>  <br />
                        <option value = "Tortilla">Tortilla Strips</option>  <br /> </select>

                    <span class = "Validator"> <?php echo $toppingsValid;?></span>
            
           <br />

            <p>Do you like this page?</p> <br />
                    Yes<input type = "checkbox" name = "like" value = "Yes">
                    No<input type = "checkbox" name = "like" value = "No">
                    <span class = "Validator"> <?php echo $termsValid;?></span> <br />
    
                    <input type = "submit" name = "submit" value = "Submit">
      </form>
    </div>




<?php
                 
                 
                 //define variables 
                    $nameValid = $emailValid = $greenssValid = $termsValid = $toppingsValid = "";
                    $name = $email = $nickname = $greenss = $class = $terms = $toppings = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["name"])) {
                        $nameValid = "Name is required";
                        }else {
                        $name = test_input($_POST["name"]);
                        }

                        if (empty($_POST["email"])) {
                        $emailValid = "Email is required";
                        }else {
                        $email = test_input($_POST["email"]);

                        // validate email
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $emailValid = "Please enter a valid email";
                        }
                        }

                        if (empty($_POST["nickname"])) {
                        $nickname = "";
                        }else {
                        $nickname = test_input($_POST["nickname"]);
                        }


                        if (empty($_POST["greenss"])) {
                        $greenssValid = "An answer is required.";
                        }else {
                        $greenss = test_input($_POST["greenss"]);
                        }

                        if (empty($_POST["toppings"])) {
                        $toppingsValid = "Select at least one option";
                        }else {
                        $toppings = $_POST["toppings"];
                        }

                        if (empty($_POST["allergies"])) {
                        $allergies = "";
                        }else {
                        $allergies = test_input($_POST["allergies"]);
                        }

                        if (empty($_POST["like"])) {
                        $termsValid = "Please enter an answer!";
                        }else {
                        $terms = $_POST["like"];
                        }

                    }

                    function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
      ?>

     

      <?php

                if (isset($_POST["submit"]))
                {
                   
                    echo ("<p>Name: $name</p>");
                    echo ("<p>Email: $email</p>");
                    echo ("<p>Nickname: $nickname</p>");
                    echo ("<p>Greens: $greenss</p>");
                    echo ("<p>Toppings: ");
                    for($i = 0; $i < count($toppings); $i++) {
                        echo($toppings[$i] . " </p>");
                    }
                    echo ("<p>Allergies: $allergies </p>");
                    echo("<p>Hi! We will take note of your preferences!");
                }
      ?>